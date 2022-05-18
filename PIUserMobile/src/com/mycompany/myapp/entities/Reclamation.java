/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author MSI
 */
public class Reclamation {
    float id ; 
String objet ; 
String message ; 
String statut ; 
float idClient ; 

    public Reclamation(float id, String objet, String message) {
        this.id = id;
        this.objet = objet;
        this.message = message;
    }

    public Reclamation() {
    }

    public Reclamation(String objet, String message, float idClient) {
        this.objet = objet;
        this.message = message;
        this.idClient = idClient;
    }

    public float getId() {
        return id;
    }

    public void setId(float id) {
        this.id = id;
    }

    public String getObjet() {
        return objet;
    }

    public void setObjet(String objet) {
        this.objet = objet;
    }

    public String getMessage() {
        return message;
    }

    public void setMessage(String message) {
        this.message = message;
    }

    public float getIdClient() {
        return idClient;
    }

    public void setIdClient(float idClient) {
        this.idClient = idClient;
    }

    public String getStatut() {
        return statut;
    }

    public void setStatut(String statut) {
        this.statut = statut;
    }

}
