package com.viators.gui.back;

import com.codename1.components.ImageViewer;
import com.codename1.ui.*;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.LoginForm;

public class AccueilBack extends Form {

    Resources theme = UIManager.initFirstTheme("/theme");
    Label label;
    public static AccueilBack accueilBack;

    public AccueilBack() {
        super("Menu", new BoxLayout(BoxLayout.Y_AXIS));
        accueilBack = this;

        addGUIs();
    }

    private void addGUIs() {
        ImageViewer userImage = new ImageViewer(theme.getImage("user-picture.jpg").fill(200, 200));
        userImage.setUIID("candidatImage");
        label = new Label("Admin"/*MainApp.getSession().getEmail()*/);
        label.setUIID("links");
        Button btnDeconnexion = new Button();
        btnDeconnexion.setUIID("buttonLogout");
        btnDeconnexion.setMaterialIcon(FontImage.MATERIAL_ARROW_FORWARD);
        btnDeconnexion.addActionListener(action -> {
            LoginForm.instance.showBack();
        });

        Container userContainer = new Container(new BorderLayout());
        userContainer.setUIID("userContainer");
        userContainer.add(BorderLayout.WEST, userImage);
        userContainer.add(BorderLayout.CENTER, label);
        userContainer.add(BorderLayout.EAST, btnDeconnexion);

        Container menuContainer = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        menuContainer.addAll(
                userContainer,
                makeButton(
                        "    Hotels",
                        FontImage.MATERIAL_HOTEL,
                        new com.viators.gui.back.hotel.DisplayAll()
                ),
                makeButton(
                        "    Chambres",
                        FontImage.MATERIAL_BED,
                        new com.viators.gui.back.chambre.DisplayAll(this)
                )
        );

        this.add(menuContainer);
    }

    private Button makeButton(String nomBouton, char icon, Form localisation) {
        Button button = new Button(nomBouton);
        button.setUIID("buttonMenu");
        button.setMaterialIcon(icon);
        button.addActionListener(action -> {
            localisation.show();
        });
        return button;
    }
}
