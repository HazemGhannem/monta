package com.mycompany.myapp.entities;

public class Chambre {

    private int id;
    private String type;
    private int nbLits;
    private int etage;
    private int prix;
    private String vue;
    private Hotel hotel;

    public Chambre(int id, String type, int nbLits, int etage, int prix, String vue, Hotel hotel) {
        this.id = id;
        this.type = type;
        this.nbLits = nbLits;
        this.etage = etage;
        this.prix = prix;
        this.vue = vue;
        this.hotel = hotel;
    }

    public Chambre(String type, int nbLits, int etage, int prix, String vue, Hotel hotel) {
        this.type = type;
        this.nbLits = nbLits;
        this.etage = etage;
        this.prix = prix;
        this.vue = vue;
        this.hotel = hotel;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public int getNbLits() {
        return nbLits;
    }

    public void setNbLits(int nbLits) {
        this.nbLits = nbLits;
    }

    public int getEtage() {
        return etage;
    }

    public void setEtage(int etage) {
        this.etage = etage;
    }

    public int getPrix() {
        return prix;
    }

    public void setPrix(int prix) {
        this.prix = prix;
    }

    public String getVue() {
        return vue;
    }

    public void setVue(String vue) {
        this.vue = vue;
    }

    public Hotel getHotel() {
        return hotel;
    }

    public void setHotel(Hotel hotel) {
        this.hotel = hotel;
    }
}
