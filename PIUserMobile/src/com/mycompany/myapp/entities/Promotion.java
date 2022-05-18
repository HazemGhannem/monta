/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author LENOVO
 */
public class Promotion {
    
    float id;
    String dateDebut;
    String dateFin;
    int pourcentage;

    public Promotion() {
    }

    public Promotion(float id, String dateDebut, String dateFin, int pourcentage) {
        this.id = id;
        this.dateDebut = dateDebut;
        this.dateFin = dateFin;
        this.pourcentage = pourcentage;
    }

    public Promotion(String dateDebut, String dateFin, int pourcentage) {
        this.dateDebut = dateDebut;
        this.dateFin = dateFin;
        this.pourcentage = pourcentage;
    }

    public float getId() {
        return id;
    }

    public String getDateDebut() {
        return dateDebut;
    }

    public String getDateFin() {
        return dateFin;
    }

    public int getPourcentage() {
        return pourcentage;
    }

    public void setId(float id) {
        this.id = id;
    }

    public void setDateDebut(String dateDebut) {
        this.dateDebut = dateDebut;
    }

    public void setDateFin(String dateFin) {
        this.dateFin = dateFin;
    }

    public void setPourcentage(int pourcentage) {
        this.pourcentage = pourcentage;
    }

   
    
    
}
