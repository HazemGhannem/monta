package com.viators.gui.back.chambre;

import com.codename1.components.ImageViewer;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Hotel;
import com.mycompany.myapp.services.HotelService;
import com.mycompany.myapp.utils.Statics;

import java.util.ArrayList;

public class ChooseHotel extends Form {

    Resources theme = UIManager.initFirstTheme("/theme");
    Form previousForm;

    public ChooseHotel(Form previous) {
        super("Choisir un hotel", new BoxLayout(BoxLayout.Y_AXIS));

        previousForm = previous;
        addGUIs();
        addActions();

        super.getToolbar().addMaterialCommandToLeftBar("  ", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }

    public void refresh() {
        this.removeAll();
        addGUIs();
        addActions();
        this.refreshTheme();
    }

    Button addBtn;

    private void addGUIs() {
        addBtn = new Button("Nouveau hotel");
        this.add(addBtn);

        ArrayList<Hotel> listHotels = HotelService.getInstance().getAll();
        if (listHotels.size() > 0) {
            for (Hotel hotels : listHotels) {
                this.add(makeHotelModel(hotels));
            }
        } else {
            this.add(new Label("Aucun hotel"));
        }
    }

    private void addActions() {
        addBtn.addActionListener(action -> new com.viators.gui.back.hotel.Manage(this, true).show());
    }

    Label nomLabel, villeLabel, nbChambreLabel;
    ImageViewer imageIV;
    Button chooseBtn;
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
                    EncodedImage.createFromImage(theme.getImage("default.jpg").fill(1100, 500), false),
                    url,
                    url,
                    URLImage.RESIZE_SCALE
            );
            imageIV = new ImageViewer(image);
        } else {
            imageIV = new ImageViewer(theme.getImage("default.jpg").fill(1100, 500));
        }
        imageIV.setFocusable(false);

        chooseBtn = new Button("Choisir");
        chooseBtn.addActionListener(l -> {
            Manage.selectedHotel = hotel;
            ((Manage) previousForm).refreshHotel();
            previousForm.showBack();
        });

        btnsContainer = new Container(new BorderLayout());
        btnsContainer.setUIID("containerButtons");
        btnsContainer.add(BorderLayout.CENTER, chooseBtn);

        hotelModel.addAll(
                nomLabel, villeLabel, nbChambreLabel,
                imageIV,
                btnsContainer
        );

        return hotelModel;
    }
}
