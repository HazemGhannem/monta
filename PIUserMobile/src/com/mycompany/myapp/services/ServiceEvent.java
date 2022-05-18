/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Event;
//import com.mycompany.myapp.AjoutProduitForm;
//import com.mycompany.myapp.ProduitForm;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Map; 
import java.util.List; 
import com.codename1.ui.Dialog;
import com.mycompany.myapp.utils.Statics;


/**
 *
 * @author PC
 */
public class ServiceEvent {
    
public ArrayList<Event> Event;

    public static ServiceEvent instance = null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServiceEvent() {
        req = new ConnectionRequest();
    }

    public static ServiceEvent getInstance() {
        if (instance == null) {
            instance = new ServiceEvent();
        }
        return instance;
    }
    
  //parseproduit
    public ArrayList<Event> parseEvent(String jsonText) {
        try {
            Event = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> EventListJson
                    = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            java.util.List<Map<String, Object>> list = (java.util.List<Map<String, Object>>) EventListJson.get("root");
            for(Map<String,Object> obj :list){
           
                Event p = new Event();

                float id = Float.parseFloat(obj.get("id").toString());
                p.setId((int) id);

                p.setNomEvent(obj.get("nomevent").toString());
                p.setDateEvent(obj.get("dateevent").toString());
                p.setDescription(obj.get("description").toString());
                
               

              //  h.setDateCreation((Date) Date.parseDate(obj.get("DateCreation").toString()));
               

                Event.add(p);
            }

        } catch (IOException ex) {

        }
        return Event;
    }
    
    //affichage des evenements :
    public ArrayList<Event> getAllEvents() {
        
 req = new ConnectionRequest();
        String url = Statics.BASE_URL +"display";
        System.out.println("===>" + url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Event = parseEvent(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Event;
    }
    

      
        //Ajouter un evenement
 /*public void AjouterEvent(Event p ,Form previous,Resources res ) {
        String url = Statics.BASE_URL + "/AjouterEvent?nomEvent="+p.getNomEvent()+"&description="+p.getDescription()+"&image="+p.getImage()+"&dateEvent="+p.getDateEvent();
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
               
                req.removeResponseListener(this);
            }
        });
        
       // new ProduitForm(previous,res).show();
        NetworkManager.getInstance().addToQueueAndWait(req);
    
    }*/
 public boolean ajouterEvent(Event t) {
        String url = Statics.BASE_URL + "/AjouterEvent?nomEvent="+t.getNomEvent()+"&dateEvent="+t.getDateEvent()+"&description="+t.getDescription()+"&image="+t.getImage(); //création de l'URL
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
 //supprimer Prduit

    public boolean deleteEvent(float id) {
        String url = Statics.BASE_URL + "deleteEvent/"+id;
        req.setUrl(url);
        //req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
               
                req.removeResponseListener(this);
            }
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
    return resultOK;
    }
    
    //update event
    public boolean updateEvent(Event t) {
        String url = Statics.BASE_URL + "/UpdateEvent?nomEvent=" + t.getNomEvent()+ "&dateEvent=" + t.getDateEvent()+"&description="+t.getDescription()+"&image="+t.getImage(); //création de l'URL
        System.out.println(url);
        System.out.println(t.getId());
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

}