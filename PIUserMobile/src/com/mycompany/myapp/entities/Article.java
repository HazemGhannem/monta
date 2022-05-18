package com.mycompany.myapp.entities;

import java.util.Date;

public class Article {

    private int id;
    private String title;
    private String image;
    private String contenu;
    private Date creationDate;
    private int rating;
    private Blogueur blogueur;
    private int pourcentageLike;

    public Article(int id, String title, String image, String contenu, Date creationDate, int rating, Blogueur blogueur, int pourcentageLike) {
        this.id = id;
        this.title = title;
        this.image = image;
        this.contenu = contenu;
        this.creationDate = creationDate;
        this.rating = rating;
        this.blogueur = blogueur;
        this.pourcentageLike = pourcentageLike;
    }

    public Article(String title, String image, String contenu, Date creationDate, int rating, Blogueur blogueur, int pourcentageLike) {
        this.title = title;
        this.image = image;
        this.contenu = contenu;
        this.creationDate = creationDate;
        this.rating = rating;
        this.blogueur = blogueur;
        this.pourcentageLike = pourcentageLike;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public Date getCreationDate() {
        return creationDate;
    }

    public void setCreationDate(Date creationDate) {
        this.creationDate = creationDate;
    }

    public int getRating() {
        return rating;
    }

    public void setRating(int rating) {
        this.rating = rating;
    }

    public Blogueur getBlogueur() {
        return blogueur;
    }

    public void setBlogueur(Blogueur blogueur) {
        this.blogueur = blogueur;
    }

    public int getPourcentageLike() {
        return pourcentageLike;
    }

    public void setPourcentageLike(int pourcentageLike) {
        this.pourcentageLike = pourcentageLike;
    }

    @Override
    public String toString() {
        return "Article{" +
                "id=" + id +
                ", title='" + title + '\'' +
                ", image='" + image + '\'' +
                ", contenu='" + contenu + '\'' +
                ", creationDate=" + creationDate +
                ", rating=" + rating +
                ", blogueur=" + blogueur +
                ", pourcentageLike=" + pourcentageLike +
                '}';
    }
}