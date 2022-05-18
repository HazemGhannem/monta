/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */
package com.mycompany.guiBack;

import com.mycompany.myapp.*;
import com.codename1.components.ToastBar;
import com.codename1.io.Preferences;
import com.codename1.io.Storage;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.Layout;
import com.codename1.ui.util.Resources;

/**
 * Common code that can setup the side menu
 *
 * @author Shai Almog
 */
public abstract class SideMenuBaseFormBack extends Form {

    public SideMenuBaseFormBack(String title, Layout contentPaneLayout) {
        super(title, contentPaneLayout);
    }

    public SideMenuBaseFormBack(String title) {
        super(title);
    }

    public SideMenuBaseFormBack() {
    }

    public SideMenuBaseFormBack(Layout contentPaneLayout) {
        super(contentPaneLayout);
    }

    public void setupSideMenu(Resources res) {
        Image profilePic = res.getImage("user-picture.jpg");
        Image mask = res.getImage("round-mask.png");
        mask = mask.scaledHeight(mask.getHeight() / 4 * 3);
        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label("  Jennifer Wilson", profilePic, "SideMenuTitle");
        profilePicLabel.setMask(mask.createMask());

        Container sidemenuTop = BorderLayout.center(profilePicLabel);
        sidemenuTop.setUIID("SidemenuTop");

        getToolbar().addComponentToSideMenu(sidemenuTop);
        getToolbar().addMaterialCommandToSideMenu("  Profile", FontImage.MATERIAL_DASHBOARD, e -> new ProfileForm(res).show());
        getToolbar().addMaterialCommandToSideMenu("  Users back", FontImage.MATERIAL_DASHBOARD, e -> new UsersFormBack(res).show());
        getToolbar().addMaterialCommandToSideMenu("  avis back", FontImage.MATERIAL_DASHBOARD, e -> new AvisFormBack(res).show());
        getToolbar().addMaterialCommandToSideMenu("  commentaire back", FontImage.MATERIAL_DASHBOARD, e -> new CommentaireFormBack(res).show());
        getToolbar().addMaterialCommandToSideMenu("  Reclamation Back", FontImage.MATERIAL_DASHBOARD, e -> new ReclamationFormBack(res).show());
        getToolbar().addMaterialCommandToSideMenu("  Reponse Back", FontImage.MATERIAL_DASHBOARD, e -> new ReponseFormBack(res).show());
        getToolbar().addMaterialCommandToSideMenu("Logout", FontImage.MATERIAL_EXIT_TO_APP, e -> {
            new LoginForm(res).show();
            Preferences.clearAll();
            Storage.getInstance().clearStorage();
            Storage.getInstance().clearCache();
            System.out.println("deleted cookie");
        }
        );
        refreshTheme();
    }
   public Component createLineSeparator(int color) {
        Label separator = new Label("", "WhiteSeparator");
        separator.getUnselectedStyle().setBgColor(color);
        separator.getUnselectedStyle().setBgTransparency(255);
        separator.setShowEvenIfBlank(true);
        return separator;
    }
    protected abstract void showOtherForm(Resources res);
}
