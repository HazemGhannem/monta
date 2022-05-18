/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author MSI
 */
public class Commentaire {

    float id;
    String comm_avis;
    String date;
    float avis;

    public Commentaire(float id, String comm_avis, float avis) {
        this.id = id;
        this.comm_avis = comm_avis;
        this.avis = avis;
    }

    public Commentaire() {
    }

    public Commentaire(String comm_avis, float avis) {
        this.comm_avis = comm_avis;
        this.avis = avis;
    }

    public float getId() {
        return id;
    }

    public void setId(float id) {
        this.id = id;
    }

    public String getComm_avis() {
        return comm_avis;
    }

    public void setComm_avis(String comm_avis) {
        this.comm_avis = comm_avis;
    }

    public float getAvis() {
        return avis;
    }

    public void setAvis(float avis) {
        this.avis = avis;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

}
