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

import com.codename1.charts.ChartComponent;
import com.codename1.charts.models.CategorySeries;
import com.codename1.charts.renderers.DefaultRenderer;
import com.codename1.charts.renderers.SimpleSeriesRenderer;
import com.codename1.charts.views.PieChart;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
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
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Reclamation;
import com.mycompany.myapp.services.ServiceReclamation;

import java.util.ArrayList;
import java.util.HashSet;
import java.util.Iterator;
import java.util.Set;
import java.util.TreeSet;

/**
 * Represents a user profile in the app, the first form we open after the
 * 
 *
 * @author Shai Almog
 */
public class StatsFormBack extends SideMenuBaseFormBack {
float o=0 ; 
    public StatsFormBack(Resources res) {
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

              setupSideMenu(res);


        add(new Label("Types de Reponses", "TodayTitle"));
        createPieChartForm();

        FontImage arrowDown = FontImage.createMaterial(FontImage.MATERIAL_KEYBOARD_ARROW_DOWN, "Label", 3);

    }

    private void addButton(Image img, Resources res,  float idrec ,String reponse, float id ) {
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(14f);
        Button image = new Button();
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);

     // Button modif = new Button("Modifier");
        TextArea idrecc = new TextArea("objet: " + idrec);
        idrecc.setUIID("NewsTopLine");
        idrecc.setEditable(false);
        TextArea reponsee = new TextArea("message: " + reponse);
        reponsee.setUIID("NewsTopLine");
        reponsee.setEditable(false);
        
Button more = new Button("modifier");
       
        //  System.out.println(id);
        cnt.add(BorderLayout.CENTER,
                BoxLayout.encloseY(
                        idrecc,reponsee , more
                ));
        add(cnt);
        more.addActionListener(e -> {

            UpdateReponseFormBack a = new UpdateReponseFormBack(res,idrec,reponse,id);
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
   public DefaultRenderer buildCatRendrer(int[] colors) {

        DefaultRenderer renderer = new DefaultRenderer();
        renderer.setLabelsTextSize(15);
        renderer.setLegendTextSize(15);
        renderer.setMargins(new int[]{20, 30, 15, 0});

        for (int color : colors) {
            SimpleSeriesRenderer simpleSeriesRenderer = new SimpleSeriesRenderer();

            simpleSeriesRenderer.setColor(color);
            renderer.addSeriesRenderer(simpleSeriesRenderer);
        }
        return renderer;
    }

    public void createPieChartForm() {


        //colors set:
        int[] colors = new int[]{0xf4b342, 0x52b29a,0xFF5733, 0x6CEF0F};

        DefaultRenderer renderer = buildCatRendrer(colors);
        renderer.setLabelsColor(0x000000); // black color for labels.

        renderer.setZoomButtonsVisible(true);//zoom
        renderer.setLabelsTextSize(40);
        renderer.setZoomEnabled(true);
        renderer.setChartTitleTextSize(20);
        renderer.setDisplayValues(true);
        renderer.setShowLabels(true);
        SimpleSeriesRenderer r = renderer.getSeriesRendererAt(0);
        r.setHighlighted(true);

        //CREATe the chart ...
        PieChart chart = new PieChart(buildDataset("title"), renderer);

        // n7oto chart fi component
        ChartComponent c = new ChartComponent(chart);

        String[] messages = {
            "Statistique par statut des reclamtions"
        };

        SpanLabel message = new SpanLabel(messages[0], "WelcomeMessage");

        Container cnt = BorderLayout.center(message);
        cnt.setUIID("Container");
        add(cnt);
        add(c);

    }


 private CategorySeries buildDataset(String title) {

        CategorySeries series = new CategorySeries(title);
       ArrayList<Reclamation> disc;
        //them = new ServiceThematique().getAllThematiques();

            disc = new ServiceReclamation().getAllReclamationsBack();
int nbe = 0;
int nbt = 0;


        for (Reclamation thematique : disc) {
 //List<String> list = List(thematique.getStatut());
      Set<String> terms = new HashSet<String>();
        terms.add(thematique.getStatut());
Iterator<String> it = terms.iterator();

     //   System.out.println("The distinct elements are :");
  
        // Displaying the distinct elements in the list
        // using Stream.distinct() method
          //  Stream<String> a= list.stream().distinct();
while(it.hasNext() ) {

           if("En cours".equals(it.next()))
{

nbe++ ; 
            series.add("a", nbe);
}else {
nbe++ ; 
            series.add("b", nbt);
}

}
        }

        return series;
    }
}
