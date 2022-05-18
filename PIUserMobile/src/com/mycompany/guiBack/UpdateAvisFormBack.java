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
import com.codename1.components.FloatingActionButton;
import com.codename1.components.MultiButton;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.services.ServiceAvis;
import com.mycompany.myapp.entities.Avis;
import java.util.ArrayList;
import java.util.Vector;

/**
 * Represents a user profile in the app, the first form we open after the
 * 
 *
 * @author Shai Almog
 */
public class UpdateAvisFormBack extends SideMenuBaseFormBack {

    public UpdateAvisFormBack(Resources res,float id,float a) {
        super(BoxLayout.y());
        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
       
      
        Button menuButton = new Button("");
        menuButton.setUIID("Title");
        FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
        menuButton.addActionListener(e -> getToolbar().openSideMenu());

     
       
        
        

        

        FontImage arrowDown = FontImage.createMaterial(FontImage.MATERIAL_KEYBOARD_ARROW_DOWN, "Label", 3);
    //    ArrayList<Avis> en = ServiceAvis.getInstance().getAllAvis();

        Button btnValider = new Button("Valider");
        Button retour = new Button("retour");
//Label pp= new Label(ServiceUser.UriImage(SessionManager.getPhoto()),"PictureWhiteBackground");
        add(LayeredLayout.encloseIn( BorderLayout.south(GridLayout.encloseIn(3, FlowLayout.encloseCenter()))));

     
            String s = Float.toString(a);

          TextField Type = new TextField(s);
        Type.setUIID("TextFieldBlack");
        addStringValue("note : ", Type);
     
           
        btnValider.setUIID("Valider");
        addStringValue("", btnValider);
        retour.setUIID("Retour");
        addStringValue("", retour);
         Button del = new Button("Delete");
         addStringValue("", del);
        TextField path = new TextField("");
 btnValider.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent evt) {
                if ((Type.getText().length() == 0)   ) {
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                } else {
                    try {
float f=Float.parseFloat(Type.getText());

                   
                        Avis t = new Avis(id,f);
                        if (ServiceAvis.getInstance().updateAvis(t)) {
                            Dialog.show("Success", "Connection accepted", new Command("OK"));
                           new AvisFormBack(res).show();
                            refreshTheme();

                        } else {
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                        }
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "saisie invalide", new Command("OK"));
                    }

                }

            }

        });
 del.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                ServiceAvis.getInstance().deletAvis(id);
                Dialog.show("Produit Deleted", "OK");
                new AvisForm(res).show();
                refreshTheme();

            }
        });
 retour.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
         
                new AvisFormBack(res).show();
                refreshTheme();

            }
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
private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s, "PaddedLabel")).
                add(BorderLayout.CENTER, v));
      
    }
    @Override
    protected void showOtherForm(Resources res) {
        new StatsForm(res).show();
    }
}
