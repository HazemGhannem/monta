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
public class Event {
    
    float id;
    String nomEvent;
    String dateEvent;
    String description;
    String image;

    public Event() {
    }

    public Event(String nomEvent, String dateEvent, String description, String image) {
        this.nomEvent = nomEvent;
        this.dateEvent = dateEvent;
        this.description = description;
        this.image = image;
    }

    public Event(float id, String nomEvent, String dateEvent, String description, String image) {
        this.id = id;
        this.nomEvent = nomEvent;
        this.dateEvent = dateEvent;
        this.description = description;
        this.image = image;
    }

    public Event(float id, String nomEvent, String dateEvent) {
        this.id = id;
        this.nomEvent = nomEvent;
        this.dateEvent = dateEvent;
    }

    public Event(String nomEvent, String dateEvent) {
        this.nomEvent = nomEvent;
        this.dateEvent = dateEvent;
    }

    public Event(String nomEvent, String dateEvent, String description) {
        this.nomEvent = nomEvent;
        this.dateEvent = dateEvent;
        this.description = description;
    }
    

    public float getId() {
        return id;
    }

    public String getNomEvent() {
        return nomEvent;
    }

    public String getDateEvent() {
        return dateEvent;
    }

    public String getDescription() {
        return description;
    }

    public String getImage() {
        return image;
    }

    public void setId(float id) {
        this.id = id;
    }

    public void setNomEvent(String nomEvent) {
        this.nomEvent = nomEvent;
    }

    public void setDateEvent(String dateEvent) {
        this.dateEvent = dateEvent;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public void setImage(String image) {
        this.image = image;
    }

    @Override
    public String toString() {
        return "Event{" + "id=" + id + ", nomEvent=" + nomEvent + ", dateEvent=" + dateEvent + ", description=" + description + ", image=" + image + '}';
    }
    
    
}
