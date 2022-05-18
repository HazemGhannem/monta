/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author MSI
 */
public class Avis {
    float id ; 
float  note ;

    public Avis(float id, float note) {
        this.id = id;
        this.note = note;
    }

    public Avis() {
    }

    public Avis(float note) {
        this.note = note;
    }

    public float getId() {
        return id;
    }

    public void setId(float id) {
        this.id = id;
    }

    public float getNote() {
        return note;
    }

    public void setNote(float note) {
        this.note = note;
    }

}
