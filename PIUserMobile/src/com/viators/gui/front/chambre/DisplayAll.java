package com.viators.gui.front.chambre;

import com.codename1.components.ImageViewer;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.SideMenuBaseForm;
import com.mycompany.myapp.entities.Chambre;
import com.mycompany.myapp.services.ChambreService;
import com.mycompany.myapp.utils.Statics;
import java.util.ArrayList;

public class DisplayAll extends SideMenuBaseForm {

    Resources theme = UIManager.initFirstTheme("/theme");

    public DisplayAll(Resources res) {
        super(BoxLayout.y());
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
                                new Label("Chambres", "Title")
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

    private void addGUIs() {
        ArrayList<Chambre> listChambres = ChambreService.getInstance().getAll();
        if (listChambres.size() > 0) {
            for (Chambre listChambre : listChambres) {
                this.add(makeChambreModel(listChambre));
            }
        } else {
            this.add(new Label("Aucune chambre"));
        }
    }

    Label typeLabel, nbLitsLabel, etageLabel, prixLabel, hotelLabel;
    ImageViewer imageIV;

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

        hotelLabel = new Label("Hotel : " + chambre.getHotel().getNom());
        hotelLabel.setUIID("labelDefault");

        chambreModel.addAll(
                imageIV,
                hotelLabel,
                typeLabel, nbLitsLabel, etageLabel, prixLabel
        );

        return chambreModel;
    }
}
