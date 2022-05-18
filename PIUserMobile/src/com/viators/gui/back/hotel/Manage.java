package com.viators.gui.back.hotel;

import com.codename1.capture.Capture;
import com.codename1.components.ImageViewer;
import com.codename1.components.ToastBar;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Hotel;
import com.mycompany.myapp.services.HotelService;
import com.mycompany.myapp.utils.Statics;
import java.io.IOException;

public class Manage extends Form {

    Resources theme = UIManager.initFirstTheme("/theme");

    boolean imageEdited = false;

    Hotel currentHotel;
    Boolean isChoose;
    String selectedImage;

    Label nomLabel, villeLabel, nbChambreLabel, imageLabel;
    TextField nomTF, villeTF, nbChambreTF;
    ImageViewer imageIV;
    Button selectImageButton, manageButton;

    Form previous;

    public Manage(Form previous, Boolean isChoose) {
        super(DisplayAll.currentHotel == null ? "Nouveau hotel" : "Modifier l'hotel", new BoxLayout(BoxLayout.Y_AXIS));
        this.previous = previous;

        currentHotel = DisplayAll.currentHotel;
        this.isChoose = isChoose;

        addGUIs();
        addActions();

        getToolbar().addMaterialCommandToLeftBar("  ", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }

    private void addGUIs() {

        nomLabel = new Label("Nom : ");
        nomLabel.setUIID("labelDefault");
        nomTF = new TextField();
        nomTF.setHint("Tapez le nom du hotel");

        villeLabel = new Label("Ville : ");
        villeLabel.setUIID("labelDefault");
        villeTF = new TextField();
        villeTF.setHint("Tapez la ville du hotel");

        nbChambreLabel = new Label("Nb chambres : ");
        nbChambreLabel.setUIID("labelDefault");
        nbChambreTF = new TextField();
        nbChambreTF.setHint("Tapez le nombre de chambres du hotel");

        imageLabel = new Label("Image : ");
        imageLabel.setUIID("labelDefault");
        selectImageButton = new Button("Ajouter une image");

        if (currentHotel == null) {
            imageIV = new ImageViewer(theme.getImage("default.jpg").fill(1100, 500));
            manageButton = new Button("Ajouter");
        } else {
            nomTF.setText(currentHotel.getNom());
            villeTF.setText(currentHotel.getVille());
            nbChambreTF.setText(String.valueOf(currentHotel.getNbChambre()));

            if (currentHotel.getImghotel() != null) {
                String url = Statics.HOTEL_IMAGE_URL + currentHotel.getImghotel();
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

            selectImageButton.setText("Modifier l'image");
            selectedImage = currentHotel.getImghotel();

            manageButton = new Button("Modifier");
        }
        manageButton.setUIID("buttonMain");

        Container container = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        container.setUIID("containerRounded");

        container.addAll(
                nomLabel, nomTF,
                villeLabel, villeTF,
                nbChambreLabel, nbChambreTF,
                imageLabel, imageIV, selectImageButton,
                manageButton
        );

        this.addAll(container);
    }

    private void addActions() {
        selectImageButton.addActionListener(a -> {
            selectedImage = Capture.capturePhoto(900, -1);
            try {
                imageEdited = true;
                imageIV.setImage(Image.createImage(selectedImage));
            } catch (IOException e) {
                e.printStackTrace();
            }
            selectImageButton.setText("Modifier l'image");
        });

        if (currentHotel == null) {
            manageButton.addActionListener(action -> {
                if (controleDeSaisie()) {
                    int responseCode = HotelService.getInstance().add(
                            new Hotel(
                                    villeTF.getText(),
                                    nomTF.getText(),
                                    (int) Float.parseFloat(nbChambreTF.getText()),
                                    selectedImage
                            )
                    );
                    if (responseCode == 200) {

                        ToastBar.getInstance().setPosition(BOTTOM);
                        ToastBar.Status status = ToastBar.getInstance().createStatus();
                        status.setShowProgressIndicator(true);
                        status.setMessage("  Hotel ajouté avec succès");
                        status.setExpires(10000);
                        status.show();
                        Dialog.show("Succés", "", new Command("Ok"));
                    } else {
                        Dialog.show("Erreur", "Erreur d'ajout de hotel. Code d'erreur : " + responseCode, new Command("Ok"));
                    }

                    showBackAndRefresh();
                }
            });
        } else {
            manageButton.addActionListener(action -> {
                if (controleDeSaisie()) {
                    int responseCode = HotelService.getInstance().edit(
                            new Hotel(
                                    currentHotel.getId(),
                                    villeTF.getText(),
                                    nomTF.getText(),
                                    (int) Float.parseFloat(nbChambreTF.getText()),
                                    selectedImage
                            ),
                            imageEdited
                    );
                    if (responseCode == 200) {
                        Dialog.show("Succés", "Hotel modifié avec succes", new Command("Ok"));
                    } else {
                        Dialog.show("Erreur", "Erreur de modification de hotel. Code d'erreur : " + responseCode, new Command("Ok"));
                    }

                    showBackAndRefresh();
                }
            });
        }
    }

    private void showBackAndRefresh() {
        if (isChoose) {
            ((com.viators.gui.back.chambre.Manage) previous).refreshHotel();
            previous.showBack();
        } else {
            ((DisplayAll) previous).refresh();
            previous.showBack();
        }
    }

    private boolean controleDeSaisie() {

        if (nomTF.getText().equals("")) {
            Dialog.show("Avertissement", "Veuillez saisir le nom", new Command("Ok"));
            return false;
        }

        if (villeTF.getText().equals("")) {
            Dialog.show("Avertissement", "Veuillez saisir la ville", new Command("Ok"));
            return false;
        }

        if (nbChambreTF.getText().equals("")) {
            Dialog.show("Avertissement", "Veuillez saisir le nombre de chambres", new Command("Ok"));
            return false;
        }
        try {
            Float.parseFloat(nbChambreTF.getText());
        } catch (NumberFormatException e) {
            Dialog.show("Avertissement", nbChambreTF.getText() + " n'est pas un nombre valide", new Command("Ok"));
            return false;
        }

        if (selectedImage == null) {
            Dialog.show("Avertissement", "Veuillez choisir une image", new Command("Ok"));
            return false;
        }
        return true;
    }
}
