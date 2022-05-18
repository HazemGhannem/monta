/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author MSI
 */
public class Reponse {
    float id ;
String reponse ; 
float idreclamation ; 

    public Reponse(float id, String reponse, float idreclamation) {
        this.id = id;
        this.reponse = reponse;
        this.idreclamation = idreclamation;
    }

    public Reponse(String reponse, float idreclamation) {
        this.reponse = reponse;
        this.idreclamation = idreclamation;
    }

    public Reponse() {
    }

    public float getId() {
        return id;
    }

    public void setId(float id) {
        this.id = id;
    }

    public String getReponse() {
        return reponse;
    }

    public void setReponse(String reponse) {
        this.reponse = reponse;
    }

    public float getIdreclamation() {
        return idreclamation;
    }

    public void setIdreclamation(float idreclamation) {
        this.idreclamation = idreclamation;
    }

}
