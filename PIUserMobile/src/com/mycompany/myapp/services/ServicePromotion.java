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
import com.mycompany.myapp.entities.Promotion;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Map;

/**
 *
 * @author LENOVO
 */
public class ServicePromotion {
    public ArrayList<Promotion> Promotion;

    public static ServicePromotion instance = null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServicePromotion() {
        req = new ConnectionRequest();
    }

    public static ServicePromotion getInstance() {
        if (instance == null) {
            instance = new ServicePromotion();
        }
        return instance;
    }
    
  //parseproduit
    public ArrayList<Promotion> parsePromotion(String jsonText) {
        try {
            Promotion = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> PromotionListJson
                    = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            java.util.List<Map<String, Object>> list = (java.util.List<Map<String, Object>>) PromotionListJson.get("root");
            for(Map<String,Object> obj :list){
           
                Promotion p = new Promotion();

                float id = Float.parseFloat(obj.get("id").toString());
                p.setId((int) id);

                p.setDateDebut(obj.get("dateDebut").toString());
                p.setDateFin(obj.get("datefin").toString());
               // p.setPourcentage(obj.get("pourcentage").toString());
                float pourcentage =Float.parseFloat(obj.get("pourcentage").toString());
                p.setPourcentage((int) pourcentage);
               

              //  h.setDateCreation((Date) Date.parseDate(obj.get("DateCreation").toString()));
               

                Promotion.add(p);
            }

        } catch (IOException ex) {

        }
        return Promotion;
    }
    
    //affichage des produits :
    public ArrayList<Promotion> getAllEvents() {
        
 req = new ConnectionRequest();
        String url = Statics.BASE_URL +"display";
        System.out.println("===>" + url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                Promotion = parsePromotion(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return Promotion;
    }
    

      
        //Ajouter un evenement
 public void AjouterEvent(Promotion p ,Form previous,Resources res ) {
        String url = Statics.BASE_URL + "/AjouterPromotion?dateDebut="+p.getDateDebut()+"&dateFin="+p.getDateFin()+"&pourcentage="+p.getPourcentage();
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
    
    }
 
 //supprimer Prduit

    public boolean delete(int id) {
        String url = Statics.BASE_URL + "deletePromotion/"+id;
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
    
    //update produit
    public void Update(Promotion p ,Form previous,Resources res) {
        String url = Statics.BASE_URL + "updatePromotion?id="+p.getId()+ "&dateDebut="+p.getDateDebut()+"&dateFin="+p.getDateFin()+"&pourcentage="+p.getPourcentage();
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
    
    }
}
