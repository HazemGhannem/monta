package com.mycompany.myapp.services;

import com.codename1.components.InfiniteProgress;
import com.codename1.io.*;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Hotel;
import com.mycompany.myapp.entities.Chambre;
import com.mycompany.myapp.utils.Statics;

import java.io.IOException;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class ChambreService {

    public static ChambreService instance = null;
    public int resultCode;
    private ConnectionRequest cr;
    private ArrayList<Chambre> listChambres;

    private ChambreService() {
        cr = new ConnectionRequest();
    }

    public static ChambreService getInstance() {
        if (instance == null) {
            instance = new ChambreService();
        }
        return instance;
    }

    public ArrayList<Chambre> getAll() {
        listChambres = new ArrayList<>();

        cr = new ConnectionRequest();
        cr.setUrl(Statics.BASE_URL + "/mobile/chambre");
        cr.setHttpMethod("GET");

        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                if (cr.getResponseCode() == 200) {
                    listChambres = getList();
                }

                cr.removeResponseListener(this);
            }
        });

        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception e) {
            e.printStackTrace();
        }

        return listChambres;
    }

    private ArrayList<Chambre> getList() {
        try {
            Map<String, Object> parsedJson = new JSONParser().parseJSON(new CharArrayReader(
                    new String(cr.getResponseData()).toCharArray()
            ));
            List<Map<String, Object>> list = (List<Map<String, Object>>) parsedJson.get("root");

            for (Map<String, Object> obj : list) {
                Chambre chambre = new Chambre(
                        (int) Float.parseFloat(obj.get("id").toString()),
                        (String) obj.get("Type"),
                        (int) Float.parseFloat(obj.get("nbLits").toString()),
                        (int) Float.parseFloat(obj.get("etage").toString()),
                        (int) Float.parseFloat(obj.get("prix").toString()),
                        (String) obj.get("vue"),
                        makeHotel((Map<String, Object>) obj.get("hotel"))
                );

                listChambres.add(chambre);
            }
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        return listChambres;
    }

    public Hotel makeHotel(Map<String, Object> obj) {
        if (obj == null) {
            return null;
        }

        return new Hotel(
                (int) Float.parseFloat(obj.get("id").toString()),
                (String) obj.get("ville"),
                (String) obj.get("nom"),
                (int) Float.parseFloat(obj.get("nbChambre").toString()),
                (String) obj.get("imghotel")
        );
    }

    public int add(Chambre chambre) {
        return manage(chambre, false, true);
    }

    public int edit(Chambre chambre, boolean imageEdited) {
        return manage(chambre, true, imageEdited);
    }

    public int manage(Chambre chambre, boolean isEdit, boolean imageEdited) {
        MultipartRequest cr = new MultipartRequest();
        cr.setFilename("file", "Chambre.jpg");
        cr.setHttpMethod("POST");
        if (isEdit) {
            cr.setUrl(Statics.BASE_URL + "/mobile/chambre/edit?type=" + chambre.getType() + "&nbLits=" + chambre.getNbLits() + "&etage=" + chambre.getEtage() + "&prix=" + chambre.getPrix() + "&hotel=" + chambre.getHotel().getId());
            cr.addArgumentNoEncoding("id", String.valueOf(chambre.getId()));
        } else {
            cr.setUrl(Statics.BASE_URL + "/mobile/chambre/add?type=" + chambre.getType() + "&nbLits=" + chambre.getNbLits() + "&etage=" + chambre.getEtage() + "&prix=" + chambre.getPrix() + "&hotel=" + chambre.getHotel().getId());
        }

//        cr.addArgumentNoEncoding("type", chambre.getType());
//        cr.addArgumentNoEncoding("nbLits", String.valueOf(chambre.getNbLits()));
//        cr.addArgumentNoEncoding("etage", String.valueOf(chambre.getEtage()));
//        cr.addArgumentNoEncoding("prix", String.valueOf(chambre.getPrix()));
//        cr.addArgumentNoEncoding("hotel", String.valueOf(chambre.getHotel().getId()));
//        if (imageEdited) {
//            try {
//                cr.addData("file", chambre.getVue(), "image/jpeg");
//            } catch (IOException e) {
//                e.printStackTrace();
//            }
//        } else {
//            cr.addArgument("image", chambre.getVue());
//        }
        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultCode = cr.getResponseCode();
                cr.removeResponseListener(this);
            }
        });
        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception ignored) {

        }
        return resultCode;
    }

    public int delete(int chambreId) {
        cr = new ConnectionRequest();
        cr.setUrl(Statics.BASE_URL + "/mobile/chambre/delete/" + chambreId);
        cr.setHttpMethod("POST");
        //cr.addArgument("id", String.valueOf(chambreId));

        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                cr.removeResponseListener(this);
            }
        });

        try {
            cr.setDisposeOnCompletion(new InfiniteProgress().showInfiniteBlocking());
            NetworkManager.getInstance().addToQueueAndWait(cr);
        } catch (Exception e) {
            e.printStackTrace();
        }
        return cr.getResponseCode();
    }
}
