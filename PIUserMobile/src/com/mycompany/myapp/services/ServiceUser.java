/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.MultipartRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.io.rest.Response;
import com.codename1.io.rest.Rest;
import com.codename1.ui.Dialog;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.util.Resources;
import com.codename1.util.Base64;
import com.mycompany.guiBack.ReponseFormBack;
import com.mycompany.myapp.WalkthruForm;
import com.mycompany.myapp.entities.SessionManager;
import com.mycompany.myapp.entities.User;
import com.mycompany.myapp.utils.Statics;

import java.io.IOException;
import java.io.Reader;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author MSI
 */
public class ServiceUser {

    public ArrayList<User> User;

    public static ServiceUser instance = null;
    public boolean resultOK;
    private ConnectionRequest req;
    String json;

    private ServiceUser() {
        req = new ConnectionRequest();
    }

    public static ServiceUser getInstance() {
        if (instance == null) {
            instance = new ServiceUser();
        }
        return instance;
    }

    public void signup(TextField nom, TextField prenom, TextField email, TextField password, float cin, TextField sexe, Resources res) {
        String url = Statics.BASE_URL + "/signupMobile?&email=" + email.getText().toString() + "&password=" + password.getText().toString() + "&nom=" + nom.getText().toString() + "&prenom=" + prenom.getText().toString() + "&sexe=" + sexe.getText().toString()+"&cin="+cin;
        req.setUrl(url);
        System.out.println(url);
        if (email.getText().equals(" ") && password.getText().equals(" ")) {
            Dialog.show("erreur", "veuillez remplir les champs", "ok", null);
        }
        req.addResponseListener((e) -> {
            byte[] data = (byte[]) e.getMetaData();
            String responseData = new String(data);
            System.out.println("data===>" + responseData);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

    }

    public void signin(TextField email, TextField password, Resources res) {
        String url = Statics.BASE_URL + "/signinMobile?email=" + email.getText().toString() + "&password=" + password.getText().toString();
        req.setUrl(url);
        System.out.println(url);

        req.addResponseListener((e) -> {
            JSONParser j = new JSONParser();
            String json = new String(req.getResponseData()) + "";
            try {
                if (json.equals("failed")) {
                    Dialog.show("echec d'authentification", "username or password incorrect", "OK", null);

                } else {
                    System.out.println("data ==" + json);
                    Map<String, Object> user = j.parseJSON(new CharArrayReader(json.toCharArray()));
                    java.util.List<String> role = (java.util.List<String>) user.get("roles");

                    if (!user.isEmpty() && "ROLE_ADMIN".equals(role.get(0))) {
                        new ReponseFormBack(res).show(); // thezek lel back
                        SessionManager.setEmail(user.get("email").toString());
                        float id = Float.parseFloat(user.get("id").toString());
                        SessionManager.setId((int) id);
                        float cin = Float.parseFloat(user.get("cin").toString());
                        SessionManager.setCin((int) cin);
                        SessionManager.setNom(user.get("nom").toString());
                        SessionManager.setSexe(user.get("sexe").toString());
                        SessionManager.setPrenom(user.get("prenom").toString());
                        SessionManager.setPassword(user.get("password").toString());
                    }
                    if (!user.isEmpty() && "ROLE_USER".equals(role.get(0))) {
                        new WalkthruForm(res).show(); // yhezek lel front 
                        SessionManager.setEmail(user.get("email").toString());
                        float id = Float.parseFloat(user.get("id").toString());
                        SessionManager.setId((int) id);
                        float cin = Float.parseFloat(user.get("cin").toString());
                        SessionManager.setCin((int) cin);
                        SessionManager.setSexe(user.get("sexe").toString());

                        SessionManager.setNom(user.get("nom").toString());
                        SessionManager.setPrenom(user.get("prenom").toString());
                        SessionManager.setPassword(user.get("password").toString());
                    }
                }
            } catch (Exception ex) {
                ex.printStackTrace();
            }
        });

        NetworkManager.getInstance().addToQueueAndWait(req);

    }

    public String getPasswordbyPhone(String email, Resources res) {
        String url = Statics.BASE_URL + "/passwordMobile?email=" + email;

        req.setUrl(url);
        System.out.println(url);

        req.addResponseListener((e) -> {
            JSONParser j = new JSONParser();
            json = new String(req.getResponseData()) + "";
            try {
                System.out.println("data ==" + json);
                Map<String, Object> password = j.parseJSON(new CharArrayReader(json.toCharArray()));
                System.out.println(password);
  // sendSms(res,json);  


            } catch (Exception ex) {
                ex.printStackTrace();
            }
        });

        NetworkManager.getInstance().addToQueueAndWait(req);
        return json;
    }
  public void sendSms(Resources res,String pass) {
     String accountSID = "ACa69c808cf28f43a09827b2ed32f18ae5";
String authToken = "d5f364153ce6eb11bcb4c8195013859b";
String fromPhone = "+17579199346";

      //  String result = ServiceUser.getInstance().getPasswordbyPhone(login.getText(), res);




 Response<Map> smsresult = Rest.post("https://api.twilio.com/2010-04-01/Accounts/" + accountSID + "/Messages.json").
                        queryParam("To", "+21653030004").
                        queryParam("From", fromPhone).
                        queryParam("Body", "Welcome To Viators "
                                + ". Your password is :!"+pass).
                        header("Authorization", "Basic " + Base64.encodeNoNewline((accountSID + ":" + authToken).getBytes())).
                        getAsJsonMap();;



}
    public static void EditUser(String nom, String prenom, String email, String password, String sexe,float cin,float id) {
        String url = Statics.BASE_URL + "/editUserMobile?&email=" + email + "&password=" + password + "&nom=" + nom + "&prenom=" + prenom + "&sexe=" + sexe+"&cin="+cin+"&id="+id;
        MultipartRequest req = new MultipartRequest();
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("nom", nom);
        req.addArgument("prenom", prenom);
        req.addArgument("password", password);
        req.addArgument("email", email);
        
        req.addResponseListener((response) -> {
            byte[] data = (byte[]) response.getMetaData();
            String a = new String(data);
            System.out.println(a);
            if (a.equals("success")) {
            } else {
                // Dialog.show("erreur", "echec de modification", "OK", null);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);

    }
public ArrayList<User> parseUser(String jsonText){
        try {
            User=new ArrayList<>();
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
            Map<String,Object> UserListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            
              /* Ici on récupère l'objet contenant notre liste dans une liste 
            d'objets json List<MAP<String,Object>> ou chaque Map est une tâche.               
            
            Le format Json impose que l'objet soit définit sous forme
            de clé valeur avec la valeur elle même peut être un objet Json.
            Pour cela on utilise la structure Map comme elle est la structure la
            plus adéquate en Java pour stocker des couples Key/Value.
            
            Pour le cas d'un tableau (Json Array) contenant plusieurs objets
            sa valeur est une liste d'objets Json, donc une liste de Map
            */
            List<Map<String,Object>> list = (List<Map<String,Object>>)UserListJson.get("root");
            //Parcourir la liste des tâches Json
            for(Map<String,Object> obj : list){
                //Création des tâches et récupération de leurs données
                User t = new User();
                float id = Float.parseFloat(obj.get("id").toString());
                t.setId((int)id);
               
                t.setEmail(obj.get("email").toString());
                t.setNom(obj.get("nom").toString());
                t.setPrenom(obj.get("prenom").toString());
                
               
                
               
                        
                //Ajouter la tâche extraite de la réponse Json à la liste
                User.add(t);
            }
            
            
        } catch (IOException ex) {
            
        }
         /*
            A ce niveau on a pu récupérer une liste des tâches à partir
        de la base de données à travers un service web
        
        */
        return User;
    }
 public ArrayList<User> getAllUser(){
        ArrayList<User> listUser = new ArrayList<>();

        String url = Statics.BASE_URL+"/ShowAllUsers";
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                User = parseUser(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return User;
    }

}
