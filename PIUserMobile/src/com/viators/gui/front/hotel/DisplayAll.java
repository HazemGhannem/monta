package com.viators.gui.front.hotel;

import com.codename1.components.ImageViewer;
import com.codename1.components.ShareButton;
import com.codename1.io.FileSystemStorage;
import com.codename1.io.Log;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.ImageIO;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.SideMenuBaseForm;
import com.mycompany.myapp.entities.Hotel;

import com.mycompany.myapp.services.HotelService;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;
import java.io.OutputStream;
import java.util.ArrayList;

public class DisplayAll extends SideMenuBaseForm {

    Resources theme = UIManager.initFirstTheme("/theme");
    Resources res;

    public DisplayAll(Resources res) {
        super(BoxLayout.y());
        this.res = res;

        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);

        Button menuButton = new Button("");
        menuButton.setUIID("Title");
        FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
        menuButton.addActionListener(e -> getToolbar().openSideMenu());

        Container titleCmp = BoxLayout.encloseY(
                FlowLayout.encloseIn(menuButton),
                BorderLayout.centerAbsolute(
                        BoxLayout.encloseY(
                                new Label("Hotels", "Title")
                        )
                )
        );

        tb.setTitleComponent(titleCmp);

        addGUIs();
        setupSideMenu(res);
    }

    @Override
    protected void showOtherForm(Resources res) {

    }

    TextField searchTF;
    ArrayList<Component> componentModels;

    private void addGUIs() {
        ArrayList<Hotel> listHotels = HotelService.getInstance().getAll();
        componentModels = new ArrayList<>();

        searchTF = new TextField("", "Chercher un hotel par nom");
        searchTF.addDataChangedListener((d, t) -> {
            if (componentModels.size() > 0) {
                for (Component componentModel : componentModels) {
                    this.removeComponent(componentModel);
                }
            }
            componentModels = new ArrayList<>();
            for (Hotel listHotel : listHotels) {
                if (listHotel.getNom().startsWith(searchTF.getText())) {
                    Component model = makeHotelModel(listHotel);
                    this.add(model);
                    componentModels.add(model);
                }
            }
            this.revalidate();
        });
        this.add(searchTF);

        if (listHotels.size() > 0) {
            for (Hotel hotel : listHotels) {
                Component model = makeHotelModel(hotel);
                this.add(model);
                componentModels.add(model);
            }
        } else {
            this.add(new Label("Aucune donnée"));
        }
    }

    Label nomLabel, villeLabel, nbChambreLabel;
    ImageViewer imageIV;
    Container btnsContainer;

    private Component makeHotelModel(Hotel hotel) {
        Container hotelModel = makeModelWithoutButtons(hotel);
        hotelModel.setUIID("containerRounded");

        btnsContainer = new Container(new BorderLayout());
        btnsContainer.setUIID("containerButtons");

        Button btnAfficherScreenshot = new Button("Partager");
        btnAfficherScreenshot.addActionListener(listener -> share(hotel));

        btnsContainer.add(BorderLayout.CENTER, btnAfficherScreenshot);

        hotelModel.add(btnsContainer);

        return hotelModel;
    }

    private Container makeModelWithoutButtons(Hotel hotel) {
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

        hotelModel.addAll(
                imageIV,
                nomLabel, villeLabel, nbChambreLabel
        );

        return hotelModel;
    }

    private void share(Hotel hotel) {
        Form form = new Form();
        form.add(new Label("Hotel " + hotel.getNom()));
        form.add(makeModelWithoutButtons(hotel));
        String imageFile = FileSystemStorage.getInstance().getAppHomePath() + "screenshot.png";
        Image screenshot = Image.createImage(
                com.codename1.ui.Display.getInstance().getDisplayWidth(),
                com.codename1.ui.Display.getInstance().getDisplayHeight()
        );
        form.revalidate();
        form.setVisible(true);
        form.paintComponent(screenshot.getGraphics(), true);
        form.removeAll();
        try (OutputStream os = FileSystemStorage.getInstance().openOutputStream(imageFile)) {
            ImageIO.getImageIO().save(screenshot, os, ImageIO.FORMAT_PNG, 1);
        } catch (IOException err) {
            Log.e(err);
        }
        Form screenShotForm = new Form("Partager le hotel", new BoxLayout(BoxLayout.Y_AXIS));
        ImageViewer screenshotViewer = new ImageViewer(screenshot.fill(1000, 2000));
        screenshotViewer.setFocusable(false);
        screenshotViewer.setUIID("screenshot");
        ShareButton btnPartager = new ShareButton();
        btnPartager.setText("Partager ");
        btnPartager.setTextPosition(LEFT);
        btnPartager.setImageToShare(imageFile, "image/png");
        btnPartager.setTextToShare(hotel.getNom());
        screenShotForm.addAll(screenshotViewer, btnPartager);
        screenShotForm.getToolbar().addMaterialCommandToLeftBar("  ", FontImage.MATERIAL_ARROW_BACK, e -> new DisplayAll(res).showBack());
        screenShotForm.show();
        // FIN API PARTAGE

    }
}
