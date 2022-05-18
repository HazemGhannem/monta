package com.mycompany.myapp.entities;

public class Hotel {

    private int id;
    private String ville;
    private String nom;
    private int nbChambre;
    private String imghotel;
    private Chambre[] chambres;


    public Hotel(int id, String ville, String nom, int nbChambre, String imghotel) {
        this.id = id;
        this.ville = ville;
        this.nom = nom;
        this.nbChambre = nbChambre;
        this.imghotel = imghotel;
    }

    public Hotel(String ville, String nom, int nbChambre, String imghotel) {
        this.ville = ville;
        this.nom = nom;
        this.nbChambre = nbChambre;
        this.imghotel = imghotel;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getVille() {
        return ville;
    }

    public void setVille(String ville) {
        this.ville = ville;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public int getNbChambre() {
        return nbChambre;
    }

    public void setNbChambre(int nbChambre) {
        this.nbChambre = nbChambre;
    }

    public String getImghotel() {
        return imghotel;
    }

    public void setImghotel(String imghotel) {
        this.imghotel = imghotel;
    }

    public Chambre[] getChambres() {
        return chambres;
    }

    public void setChambres(Chambre[] chambres) {
        this.chambres = chambres;
    }


}
