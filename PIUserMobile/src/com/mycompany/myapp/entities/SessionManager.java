/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

import com.codename1.io.Preferences;

/**
 *
 * @author bilel
 */
public class SessionManager {
    
    public static Preferences pref ; 
    
    private static float id ; 
    private static String email;
    private static String nom;
    private static String prenom;
    private static String password;
    private static String photo;
      private static String sexe;
 private static float cin ; 

  
    public static Preferences getPref(){
        return pref;
    }
    public static void setPref(Preferences pref){
        SessionManager.pref = pref ; 
        
    }

    public static float getId() {
        return pref.get("id",id);
    }

    public static void setId(float id) {
        pref.set("id", id);
    }

 

    public static String getEmail() {
         return pref.get("email",email);
    }

    public static void setEmail(String email) {
      pref.set("email", email);
    }

    public static String getPassword() {
         return pref.get("password",password);
    }

    public static void setPassword(String password) {
           pref.set("password", password);
    }

    public static String getPhoto() {
       return pref.get("photo",photo);
    }

    public static void setPhoto(String photo) {
        pref.set("photo", photo);
    }

    public static String getNom() {
       return pref.get("nom",nom);
    }

    public static void setNom(String nom) {
        pref.set("nom", nom);
    }

    public static String getPrenom() {
       return pref.get("prenom",prenom);
    }

    public static void setPrenom(String prenom) {
        pref.set("prenom", prenom);
    }

    public static String getSexe() {
        return sexe;
    }

    public static void setSexe(String sexe) {
        SessionManager.sexe = sexe;
    }

    public static float getCin() {
        return cin;
    }

    public static void setCin(float cin) {
        SessionManager.cin = cin;
    }

    
}