package com.viators.gui.back.chambre;

import com.codename1.components.ImageViewer;
import com.codename1.components.InteractionDialog;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Chambre;
import com.mycompany.myapp.entities.Hotel;
import com.viators.gui.back.AccueilBack;
import com.mycompany.myapp.services.ChambreService;
import com.mycompany.myapp.utils.Statics;
import java.util.ArrayList;

public class DisplayAll extends Form {

    Resources theme = UIManager.initFirstTheme("/theme");
    public static Chambre currentChambre = null;
    Button addBtn;

    public DisplayAll(Form previous) {
        super("Chambres", new BoxLayout(BoxLayout.Y_AXIS));

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
        addBtn = new Button("Nouvelle chambre");
        addBtn.setUIID("buttonWhiteCenter");

        this.add(addBtn);

        ArrayList<Chambre> listChambres = ChambreService.getInstance().getAll();
        if (listChambres.size() > 0) {
            for (Chambre listChambre : listChambres) {
                this.add(makeChambreModel(listChambre));
            }
        } else {
            this.add(new Label("Aucun chambre"));
        }
    }

    private void addActions() {
        addBtn.addActionListener(action -> {
            currentChambre = null;
            new Manage(this).show();
        });
    }

    Label typeLabel, nbLitsLabel, etageLabel, prixLabel, hotelLabel;
    ImageViewer imageIV;
    Button editBtn, deleteBtn;
    Container btnsContainer;

    private Component makeChambreModel(Chambre chambre) {
        Container chambreModel = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        chambreModel.setUIID("containerRounded");

        typeLabel = new Label("Type : " + chambre.getType());
        typeLabel.setUIID("labelDefault");

        nbLitsLabel = new Label("Nomre de lits : " + chambre.getNbLits());
        nbLitsLabel.setUIID("labelDefault");

        etageLabel = new Label("Etage : " + chambre.getEtage());
        etageLabel.setUIID("labelDefault");

        prixLabel = new Label("Prix : " + chambre.getPrix());
        prixLabel.setUIID("labelDefault");

        if (chambre.getVue() != null) {
            String url = Statics.CHAMBRE_IMAGE_URL + chambre.getVue();
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

        hotelLabel = new Label("Hotel : " + chambre.getHotel().getNom());
        hotelLabel.setUIID("labelDefault");

        btnsContainer = new Container(new BorderLayout());
        btnsContainer.setUIID("containerButtons");

        editBtn = new Button("Modifier");
        editBtn.setUIID("buttonMain");
        editBtn.addActionListener(action -> {
            currentChambre = chambre;
            new Manage(this).show();
        });

        deleteBtn = new Button("Supprimer");
        deleteBtn.setUIID("buttonDanger");
        deleteBtn.addActionListener(action -> {

            int responseCode = ChambreService.getInstance().delete(chambre.getId());

            if (responseCode == 200) {
                currentChambre = null;

                chambreModel.remove();
                this.refreshTheme();
            } else {
                Dialog.show("Erreur", "Erreur de suppression du chambre. Code d'erreur : " + responseCode, new Command("Ok"));
            }
        });
        Container btnContainer = new Container(new BoxLayout(BoxLayout.X_AXIS));

        btnsContainer.add(BorderLayout.CENTER, editBtn);
        btnsContainer.add(BorderLayout.EAST, deleteBtn);

        chambreModel.addAll(
                typeLabel, nbLitsLabel, etageLabel, prixLabel,
                imageIV,
                hotelLabel,
                btnsContainer
        );

        return chambreModel;
    }
}
