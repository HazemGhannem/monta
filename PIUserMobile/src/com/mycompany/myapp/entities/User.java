/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.myapp.entities;

/**
 *
 * @author MSI
 */
public class User {

    float id;
    private String nom;
    private String prenom;
    private String password;
    private String email;
    private String sexe;
    float cin;

    public User(String nom, String prenom, String password, String email, String sexe, float cin) {
        this.nom = nom;
        this.prenom = prenom;
        this.password = password;
        this.email = email;
        this.sexe = sexe;
        this.cin = cin;
    }

    public User(float id, String nom, String prenom, String password, String email, String sexe, float cin) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.password = password;
        this.email = email;
        this.sexe = sexe;
        this.cin = cin;
    }

    public User() {
    }

    public float getId() {
        return id;
    }

    public void setId(float id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getSexe() {
        return sexe;
    }

    public void setSexe(String sexe) {
        this.sexe = sexe;
    }

    public float getCin() {
        return cin;
    }

    public void setCin(float cin) {
        this.cin = cin;
    }

}
