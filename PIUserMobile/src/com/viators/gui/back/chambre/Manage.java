package com.viators.gui.back.chambre;

import com.codename1.capture.Capture;
import com.codename1.components.ImageViewer;
import com.codename1.components.ToastBar;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Chambre;
import com.mycompany.myapp.entities.Hotel;
import com.mycompany.myapp.services.ChambreService;
import com.mycompany.myapp.utils.Statics;

import java.io.IOException;

public class Manage extends Form {

    Resources theme = UIManager.initFirstTheme("/theme");

    boolean imageEdited = false;

    public static Hotel selectedHotel;
    Chambre currentChambre;
    String selectedImage;

    Label typeLabel, nbLitsLabel, etageLabel, prixLabel, imageLabel, hotelLabel, selectedHotelLabel;
    TextField typeTF, nbLitsTF, etageTF, prixTF;
    ImageViewer imageIV;
    Button selectHotelButton, selectImageButton, manageButton;

    Form previous;

    public Manage(Form previous) {
        super(DisplayAll.currentChambre == null ? "Nouvelle chambre" : "Modifier la chambre", new BoxLayout(BoxLayout.Y_AXIS));
        this.previous = previous;

        selectedHotel = null;
        currentChambre = DisplayAll.currentChambre;

        addGUIs();
        addActions();

        getToolbar().addMaterialCommandToLeftBar("  ", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }

    public void refreshHotel() {
        selectedHotelLabel.setText(selectedHotel.getNom());
        selectHotelButton.setText("Modifier l'hotel");
        this.refreshTheme();
    }

    private void addGUIs() {

        typeLabel = new Label("Type : ");
        typeLabel.setUIID("labelDefault");
        typeTF = new TextField();
        typeTF.setHint("Tapez le type de la chambre");

        nbLitsLabel = new Label("Nb lits : ");
        nbLitsLabel.setUIID("labelDefault");
        nbLitsTF = new TextField();
        nbLitsTF.setHint("Tapez le nombre de lits de la chambre");

        etageLabel = new Label("Etage : ");
        etageLabel.setUIID("labelDefault");
        etageTF = new TextField();
        etageTF.setHint("Tapez l'etage de la chambre");

        prixLabel = new Label("Prix : ");
        prixLabel.setUIID("labelDefault");
        prixTF = new TextField();
        prixTF.setHint("Tapez le prix de la chambre");

        imageLabel = new Label("Image : ");
        imageLabel.setUIID("labelDefault");
        selectImageButton = new Button("Ajouter une image");

        if (currentChambre == null) {
            imageIV = new ImageViewer(theme.getImage("default.jpg").fill(1100, 500));
            manageButton = new Button("Ajouter");
        } else {
            typeTF.setText(currentChambre.getType());
            nbLitsTF.setText(String.valueOf(currentChambre.getNbLits()));
            etageTF.setText(String.valueOf(currentChambre.getEtage()));
            prixTF.setText(String.valueOf(currentChambre.getPrix()));

            selectedHotel = currentChambre.getHotel();

            if (currentChambre.getVue() != null) {
                String url = Statics.CHAMBRE_IMAGE_URL + currentChambre.getVue();
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
            selectedImage = currentChambre.getVue();

            manageButton = new Button("Modifier");
        }
        manageButton.setUIID("buttonMain");

        hotelLabel = new Label("Hotel : ");
        hotelLabel.setUIID("labelDefault");
        if (selectedHotel != null) {
            selectedHotelLabel = new Label(selectedHotel.getNom());
            selectHotelButton = new Button("Modifier l'hotel");
        } else {
            selectedHotelLabel = new Label("Aucune hotel selectionné");
            selectHotelButton = new Button("Choisir une hotel");
        }

        Container container = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        container.setUIID("containerRounded");

        container.addAll(
                typeLabel, typeTF,
                nbLitsLabel, nbLitsTF,
                etageLabel, etageTF,
                prixLabel, prixTF,
                imageLabel, imageIV, selectImageButton,
                hotelLabel, selectedHotelLabel, selectHotelButton,
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

        selectHotelButton.addActionListener(l -> new ChooseHotel(this).show());

        if (currentChambre == null) {
            manageButton.addActionListener(action -> {
                if (controleDeSaisie()) {
                    int responseCode = ChambreService.getInstance().add(
                            new Chambre(
                                    typeTF.getText(),
                                    (int) Float.parseFloat(nbLitsTF.getText()),
                                    (int) Float.parseFloat(etageTF.getText()),
                                    (int) Float.parseFloat(prixTF.getText()),
                                    selectedImage,
                                    selectedHotel
                            )
                    );
                    if (responseCode == 200) {
                        ToastBar.getInstance().setPosition(BOTTOM);
                        ToastBar.Status status = ToastBar.getInstance().createStatus();
                        status.setShowProgressIndicator(true);
                        status.setMessage("  Chambre ajouté avec succès");
                        status.setExpires(10000);
                        status.show();
                        Dialog.show("Succés", "", new Command("Ok"));
                    } else {
                        Dialog.show("Erreur", "Erreur d'ajout de chambre. Code d'erreur : " + responseCode, new Command("Ok"));
                    }

                    showBackAndRefresh();
                }
            });
        } else {
            manageButton.addActionListener(action -> {
                if (controleDeSaisie()) {
                    int responseCode = ChambreService.getInstance().edit(
                            new Chambre(
                                    currentChambre.getId(),
                                    typeTF.getText(),
                                    (int) Float.parseFloat(nbLitsTF.getText()),
                                    (int) Float.parseFloat(etageTF.getText()),
                                    (int) Float.parseFloat(prixTF.getText()),
                                    selectedImage,
                                    selectedHotel
                            ),
                            imageEdited
                    );
                    if (responseCode == 200) {
                        Dialog.show("Succés", "Chambre modifié avec succes", new Command("Ok"));
                    } else {
                        Dialog.show("Erreur", "Erreur de modification de chambre. Code d'erreur : " + responseCode, new Command("Ok"));
                    }

                    showBackAndRefresh();
                }
            });
        }
    }

    private void showBackAndRefresh() {
        ((DisplayAll) previous).refresh();
        previous.showBack();
    }

    private boolean controleDeSaisie() {

        if (typeTF.getText().equals("")) {
            Dialog.show("Avertissement", "Veuillez saisir le type", new Command("Ok"));
            return false;
        }

        if (nbLitsTF.getText().equals("")) {
            Dialog.show("Avertissement", "Veuillez saisir le nombre de lits", new Command("Ok"));
            return false;
        }
        try {
            Float.parseFloat(nbLitsTF.getText());
        } catch (NumberFormatException e) {
            Dialog.show("Avertissement", nbLitsTF.getText() + " n'est pas un nombre valide", new Command("Ok"));
            return false;
        }

        if (etageTF.getText().equals("")) {
            Dialog.show("Avertissement", "Veuillez saisir l'etage", new Command("Ok"));
            return false;
        }
        try {
            Float.parseFloat(etageTF.getText());
        } catch (NumberFormatException e) {
            Dialog.show("Avertissement", etageTF.getText() + " n'est pas un nombre valide", new Command("Ok"));
            return false;
        }

        if (prixTF.getText().equals("")) {
            Dialog.show("Avertissement", "Veuillez saisir le prix", new Command("Ok"));
            return false;
        }
        try {
            Float.parseFloat(prixTF.getText());
        } catch (NumberFormatException e) {
            Dialog.show("Avertissement", prixTF.getText() + " n'est pas un prix valide", new Command("Ok"));
            return false;
        }

        if (selectedImage == null) {
            Dialog.show("Avertissement", "Veuillez choisir une image", new Command("Ok"));
            return false;
        }

        if (selectedHotel == null) {
            Dialog.show("Avertissement", "Veuillez choisir un hotel", new Command("Ok"));
            return false;
        }

        return true;
    }
}
