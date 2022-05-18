/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Commentaire;
import com.mycompany.myapp.utils.Statics;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;

/**
 *
 * @author MSI
 */
public class ServiceCommentaire {

    public ArrayList<Commentaire> Commentaire;

    public static ServiceCommentaire instance = null;
    public boolean resultOK;
    private ConnectionRequest req;

    private ServiceCommentaire() {
        req = new ConnectionRequest();
    }

    public static ServiceCommentaire getInstance() {
        if (instance == null) {
            instance = new ServiceCommentaire();
        }
        return instance;
    }

    public ArrayList<Commentaire> parseCommentaire(String jsonText) {
        try {
            Commentaire = new ArrayList<>();
            JSONParser j = new JSONParser();// Instanciation d'un objet JSONParser permettant le parsing du résultat json

            /*
                On doit convertir notre réponse texte en CharArray à fin de
            permettre au JSONParser de la lire et la manipuler d'ou vient 
            l'utilité de new CharArrayReader(json.toCharArray())
            
            La méthode parse json retourne une MAP<String,Object> ou String est 
            la clé principale de notre résultat.
            Dans notre cas la clé principale n'est pas définie cela ne veux pas
            dire qu'elle est manquante mais plutôt gardée à la valeur par defaut
            qui est root.
            En fait c'est la clé de l'objet qui englobe la totalité des objets 
                    c'est la clé définissant le tableau de tâches.
             */
            Map<String, Object> CommentaireListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            /* Ici on récupère l'objet contenant notre liste dans une liste 
            d'objets json List<MAP<String,Object>> ou chaque Map est une tâche.               
            
            Le format Json impose que l'objet soit définit sous forme
            de clé valeur avec la valeur elle même peut être un objet Json.
            Pour cela on utilise la structure Map comme elle est la structure la
            plus adéquate en Java pour stocker des couples Key/Value.
            
            Pour le cas d'un tableau (Json Array) contenant plusieurs objets
            sa valeur est une liste d'objets Json, donc une liste de Map
             */
            List<Map<String, Object>> list = (List<Map<String, Object>>) CommentaireListJson.get("root");

            //Parcourir la liste des tâches Json
            for (Map<String, Object> obj : list) {
        Map<Float, Object> type =(Map<Float, Object>) obj.get("avis");

                //Création des tâches et récupération de leurs données
                Commentaire t = new Commentaire();
                float id = Float.parseFloat(obj.get("id").toString());
                float ied = Float.parseFloat(type.get("id").toString());
                t.setAvis(ied);
                t.setComm_avis(obj.get("comm_avis").toString());
                t.setDate(obj.get("date_com").toString());
              
                System.out.println("******");
                System.out.println(id);
                System.out.println("******");
                System.out.println("******");
                //Ajouter la tâche extraite de la réponse Json à la liste
                Commentaire.add(t);
            }

        } catch (IOException ex) {

        }
        /*
            A ce niveau on a pu récupérer une liste des tâches à partir
        de la base de données à travers un service web
        
         */
        return Commentaire;
    }

    public ArrayList<Commentaire> ShowAllCommentsbyid(float id) {
        ArrayList<Commentaire> listCommentaire = new ArrayList<>();

        String url = Statics.BASE_URL + "/ShowAllCommentsbyid?id="+id;
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Commentaire = parseCommentaire(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Commentaire;
    }

    public boolean addCommentaire(Commentaire t) {
        String url = Statics.BASE_URL + "/AddComment?comm_avis=" + t.getComm_avis()+ "&avis=" + t.getAvis(); //création de l'URL
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
                /* une fois que nous avons terminé de l'utiliser.
                La ConnectionRequest req est unique pour tous les appels de 
                n'importe quelle méthode du Service task, donc si on ne supprime
                pas l'ActionListener il sera enregistré et donc éxécuté même si 
                la réponse reçue correspond à une autre URL(get par exemple)*/

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public void deletCommentaire(float id) {

        Dialog d = new Dialog();
        if (d.show("Delete Commentaire", "Do you really want to remove this Commentaire", "Yes", "No")) {

            req.setUrl(Statics.BASE_URL + "/DeleteComment?id=" + id);
            //System.out.println(Statics.BASE_URL+"/deleteCommentaireMobile?id="+id);
            NetworkManager.getInstance().addToQueueAndWait(req);

            d.dispose();
        }
    }

    public boolean updateCommentaire(Commentaire t) {

        String url = Statics.BASE_URL + "/UpdateComment?comm_avis=" + t.getComm_avis()+ "&avis=" + t.getAvis()+"&id="+t.getId(); //création de l'URL
        System.out.println(url);
        req.setUrl(url);// Insertion de l'URL de notre demande de connexion
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this); //Supprimer cet actionListener
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }

    public ArrayList<Commentaire> getAllCommentairesBack() {
        ArrayList<Commentaire> listCommentaire = new ArrayList<>();

        String url = Statics.BASE_URL + "/ShowAllComments";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Commentaire = parseCommentaire(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Commentaire;
    }
    public ArrayList<Commentaire> getAllReclamationstri() {
        ArrayList<Commentaire> listCommentaire = new ArrayList<>();

        String url = Statics.BASE_URL + "/tridescMobilee";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Commentaire = parseCommentaire(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Commentaire;
    }
}
