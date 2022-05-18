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

import com.mycompany.guiBack.StatsForm;
import com.codename1.components.FloatingActionButton;
import com.codename1.components.MultiButton;
import com.codename1.ui.Button;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import com.codename1.ui.Container;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.guiBack.SideMenuBaseFormBack;
import com.mycompany.guiBack.addReponseFormBack;
import com.mycompany.myapp.services.ServiceReclamation;
import com.mycompany.myapp.entities.Reclamation;
import java.util.ArrayList;

/**
 * Represents a user profile in the app, the first form we open after the
 * 
 *
 * @author Shai Almog
 */
public class TriFormBack extends SideMenuBaseFormBack {

    public TriFormBack(Resources res) {
        super(BoxLayout.y());
        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        Image profilePic = res.getImage("user-picture.jpg");
        Image mask = res.getImage("round-mask.png");
        profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
        Label profilePicLabel = new Label(profilePic, "ProfilePicTitle");
        profilePicLabel.setMask(mask.createMask());

        Button menuButton = new Button("");
        menuButton.setUIID("Title");
        FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
        menuButton.addActionListener(e -> getToolbar().openSideMenu());

        Container remainingTasks = BoxLayout.encloseY(
                new Label("12", "CenterTitle"),
                new Label("remaining tasks", "CenterSubTitle")
        );
        remainingTasks.setUIID("RemainingTasks");
        Container completedTasks = BoxLayout.encloseY(
                new Label("32", "CenterTitle"),
                new Label("completed tasks", "CenterSubTitle")
        );
        completedTasks.setUIID("CompletedTasks");

        Container titleCmp = BoxLayout.encloseY(
                FlowLayout.encloseIn(menuButton),
                BorderLayout.centerAbsolute(
                        BoxLayout.encloseY(
                                new Label("Jennifer Wilson", "Title"),
                                new Label("UI/UX Designer", "SubTitle")
                        )
                ).add(BorderLayout.WEST, profilePicLabel),
                GridLayout.encloseIn(2, remainingTasks, completedTasks)
        );

        FloatingActionButton fab = FloatingActionButton.createFAB(FontImage.MATERIAL_ADD);
        FloatingActionButton fabTri = fab.createSubFAB(FontImage.MATERIAL_ARROW_UPWARD, "Sort by Etat");

        fab.getAllStyles().setMarginUnit(Style.UNIT_TYPE_PIXELS);
        fab.getAllStyles().setMargin(BOTTOM, completedTasks.getPreferredH() - fab.getPreferredH() / 2);

fabTri.addActionListener(e -> {
           // new TriForm(res).show(); // *******************
        });
        tb.setTitleComponent(fab.bindFabToContainer(titleCmp, CENTER, BOTTOM));

        add(new Label("Les Reclamations", "TodayTitle"));

        FontImage arrowDown = FontImage.createMaterial(FontImage.MATERIAL_KEYBOARD_ARROW_DOWN, "Label", 3);

        ArrayList<Reclamation> en = ServiceReclamation.getInstance().getAllReclamationstri();

        Display.getInstance().scheduleBackgroundTask(() -> {

            Display.getInstance().callSerially(() -> {
                for (Reclamation eyy : en) {
                    //MultiButton m = new MultiButton();
                    addButton(res.getImage("news-item-1.jpg"), res, eyy.getObjet(), eyy.getMessage(), eyy.getStatut(), eyy.getId());
                    //  contenu = eyy.getContenu();
                    //titre = eyy.getTitre();
                    //   System.out.println(eyy.getId());

                }
            });
        });

        setupSideMenu(res);
    }

    private void addButton(Image img, Resources res, String objet, String message, String status, float id) {
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(14f);
        Button image = new Button();
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);

        // Button modif = new Button("Modifier");
        TextArea objett = new TextArea("objet: " + objet);
        objett.setUIID("NewsTopLine");
        objett.setEditable(false);
        TextArea messagee = new TextArea("message: " + message);
        messagee.setUIID("NewsTopLine");
        messagee.setEditable(false);
        TextArea statuss = new TextArea("status: " + status);
        statuss.setUIID("NewsTopLine");
        statuss.setEditable(false);
        Button more = new Button("Repondre");

        //  System.out.println(id);
        cnt.add(BorderLayout.CENTER,
                BoxLayout.encloseY(
                        objett, messagee, statuss, more
                ));
        add(cnt);
        more.addActionListener(e -> {

            addReponseFormBack a = new addReponseFormBack(res, id);
            System.out.println(id);
            a.show();
        });
    }

    private Image createCircleLine(int color, int height, boolean first) {
        Image img = Image.createImage(height, height, 0);
        Graphics g = img.getGraphics();
        g.setAntiAliased(true);
        g.setColor(0xcccccc);
        int y = 0;
        if (first) {
            y = height / 6 + 1;
        }
        g.drawLine(height / 2, y, height / 2, height);
        g.drawLine(height / 2 - 1, y, height / 2 - 1, height);
        g.setColor(color);
        g.fillArc(height / 2 - height / 4, height / 6, height / 2, height / 2, 0, 360);
        return img;
    }

    @Override
    protected void showOtherForm(Resources res) {
        new StatsForm(res).show();
    }
}
