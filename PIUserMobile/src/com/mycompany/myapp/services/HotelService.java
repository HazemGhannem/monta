package com.mycompany.myapp.services;

import com.codename1.components.InfiniteProgress;
import com.codename1.io.*;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entities.Hotel;
import com.mycompany.myapp.utils.Statics;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

public class HotelService {

    public static HotelService instance = null;
    public int resultCode;
    private ConnectionRequest cr;
    private ArrayList<Hotel> listHotels;

    private HotelService() {
        cr = new ConnectionRequest();
    }

    public static HotelService getInstance() {
        if (instance == null) {
            instance = new HotelService();
        }
        return instance;
    }

    public ArrayList<Hotel> getAll() {
        listHotels = new ArrayList<>();

        cr = new ConnectionRequest();
        cr.setUrl(Statics.BASE_URL + "/mobile/hotel");
        cr.setHttpMethod("GET");

        cr.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {

                if (cr.getResponseCode() == 200) {
                    listHotels = getList();
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

        return listHotels;
    }

    private ArrayList<Hotel> getList() {
        try {
            Map<String, Object> parsedJson = new JSONParser().parseJSON(new CharArrayReader(
                    new String(cr.getResponseData()).toCharArray()
            ));
            List<Map<String, Object>> list = (List<Map<String, Object>>) parsedJson.get("root");

            for (Map<String, Object> obj : list) {
                Hotel hotel = new Hotel(
                        (int) Float.parseFloat(obj.get("id").toString()),
                        (String) obj.get("ville"),
                        (String) obj.get("nom"),
                        (int) Float.parseFloat(obj.get("nbChambre").toString()),
                        (String) obj.get("imghotel")
                );

                listHotels.add(hotel);
            }
        } catch (IOException ex) {
            ex.printStackTrace();
        }
        return listHotels;
    }

    public int add(Hotel hotel) {
        return manage(hotel, false, true);
    }

    public int edit(Hotel hotel, boolean imageEdited) {
        return manage(hotel, true, imageEdited);
    }

    public int manage(Hotel hotel, boolean isEdit, boolean imageEdited) {
        MultipartRequest cr = new MultipartRequest();
        cr.setHttpMethod("POST");
        cr.setFilename("file", "Hotel.jpg");
        if (isEdit) {
            cr.setUrl(Statics.BASE_URL + "/mobile/hotel/edit?ville=" + hotel.getVille() + "&nom=" + hotel.getNom() + "&nbChambre=" + hotel.getNbChambre());
            cr.addArgumentNoEncoding("id", String.valueOf(hotel.getId()));
        } else {
            cr.setUrl(Statics.BASE_URL + "/mobile/hotel/add?ville=" + hotel.getVille() + "&nom=" + hotel.getNom() + "&nbChambre=" + hotel.getNbChambre());
        }

//        cr.addArgumentNoEncoding("ville", hotel.getVille());
//        cr.addArgumentNoEncoding("nom", hotel.getNom());
//        cr.addArgumentNoEncoding("nbChambre", String.valueOf(hotel.getNbChambre()));
//        if (imageEdited) {
//            try {
//                cr.addData("file", hotel.getImghotel(), "image/jpeg");
//            } catch (IOException e) {
//                e.printStackTrace();
//            }
//        } else {
//            //  cr.addArgument("image", hotel.getImghotel());
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

    public int delete(int hotelId) {
        cr = new ConnectionRequest();
        cr.setUrl(Statics.BASE_URL + "/mobile/hotel/delete/" + hotelId);
        cr.setHttpMethod("POST");
        // cr.addArgument("id", String.valueOf(hotelId));

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
