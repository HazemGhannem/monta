package com.viators.gui.back.hotel;

import com.codename1.components.ImageViewer;
import com.codename1.components.InteractionDialog;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Hotel;
import com.viators.gui.back.AccueilBack;
import com.mycompany.myapp.services.HotelService;
import com.mycompany.myapp.utils.Statics;

import java.util.ArrayList;

public class DisplayAll extends Form {

    Resources theme = UIManager.initFirstTheme("/theme");
    public static Hotel currentHotel = null;
    Button addBtn;

    public DisplayAll() {
        super("Hotels", new BoxLayout(BoxLayout.Y_AXIS));

        addGUIs();
        addActions();

        super.getToolbar().addMaterialCommandToLeftBar("  ", FontImage.MATERIAL_ARROW_BACK, e -> AccueilBack.accueilBack.showBack());
    }

    public void refresh() {
        this.removeAll();
        addGUIs();
        addActions();
        this.refreshTheme();
    }

    private void addGUIs() {
        addBtn = new Button("Nouveau hotel");
        addBtn.setUIID("buttonWhiteCenter");

        this.add(addBtn);

        ArrayList<Hotel> listHotels = HotelService.getInstance().getAll();
        if (listHotels.size() > 0) {
            for (Hotel listHotel : listHotels) {
                this.add(makeHotelModel(listHotel));
            }
        } else {
            this.add(new Label("Aucun hotel"));
        }
    }

    private void addActions() {
        addBtn.addActionListener(action -> {
            currentHotel = null;
            new Manage(this, false).show();
        });
    }

    Label nomLabel, villeLabel, nbChambreLabel;
    ImageViewer imageIV;
    Button editBtn, deleteBtn;
    Container btnsContainer;

    private Component makeHotelModel(Hotel hotel) {
        Container hotelModel = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        hotelModel.setUIID("containerRounded");

        nomLabel = new Label(hotel.getNom());
        nomLabel.setUIID("labelCenter");

        villeLabel = new Label("Ville : " + hotel.getVille());
        villeLabel.setUIID("labelDefault");

        nbChambreLabel = new Label("Nombre de chambres : " + hotel.getNbChambre());
        nbChambreLabel.setUIID("labelDefault");

        if (hotel.getImghotel() != null) {
            String url = Statics.HOTEL_IMAGE_URL + hotel.getImghotel();
            Image image = URLImage.createToStorage(
                    EncodedImage.createFromImage(theme.getImage("user-picture.jpg").fill(1100, 500), false),
                    url,
                    url,
                    URLImage.RESIZE_SCALE
            );
            imageIV = new ImageViewer(image);
        } else {
            imageIV = new ImageViewer(theme.getImage("user-picture.jpg").fill(1100, 500));
        }
        imageIV.setFocusable(false);

        btnsContainer = new Container(new BorderLayout());
        btnsContainer.setUIID("containerButtons");

        editBtn = new Button("Modifier");
        editBtn.setUIID("buttonMain");
        editBtn.addActionListener(action -> {
            currentHotel = hotel;
            new Manage(this, false).show();
        });

        deleteBtn = new Button("Supprimer");
        deleteBtn.setUIID("buttonDanger");
        deleteBtn.addActionListener(evt -> {
            System.out.println("hey");
            int responseCode = HotelService.getInstance().delete(hotel.getId());

            if (responseCode == 200) {
                currentHotel = null;

                hotelModel.remove();
                this.refreshTheme();
            } else {
                Dialog.show("Erreur", "Erreur de suppression du hotel. Code d'erreur : " + responseCode, new Command("Ok"));
            }
        });
        Container btnContainer = new Container(new BoxLayout(BoxLayout.X_AXIS));

        btnsContainer.add(BorderLayout.CENTER, editBtn);
        btnsContainer.add(BorderLayout.EAST, deleteBtn);

        hotelModel.addAll(
                nomLabel, villeLabel, nbChambreLabel,
                imageIV,
                btnsContainer
        );

        return hotelModel;
    }
}
