package com.mycompany.myapp.entities;

public class Blogueur {

    private int id;
    private String name;

    public Blogueur(int id, String name) {
        this.id = id;
        this.name = name;
    }

    public Blogueur(String name) {
        this.name = name;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

}