<?php

namespace App\Controller;

use App\Repository\CalendarRepository;
use App\Repository\DestinationRepository;
use App\Repository\VolllRepository;
use App\Entity\Destination;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Volll;
use App\Form\FormulaireType;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Dompdf;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class VolController extends AbstractController
{
    /**
     * @Route("/Vol", name="Vol")
     */
    public function index(): Response
    {
        return $this->render('Vol/aff.html.twig', [
            'controller_name' => 'VolController',
        ]);
    }


    /**
     *@Route("addv", name="addv")
     */
    public function add(Request $request)
    {$c=new Volll();
        $form=$this->createForm(FormulaireType::class,$c);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($c);
            $em->flush();

            return $this->redirectToRoute('list');
        }
        return $this->render("Vol/index.html.twig",["form"=>$form->createView()]);
    }
    /**
     *@Route("list", name="list")
     */
    public function list():Response
    {
        $vol = $this->getDoctrine()
            ->getRepository(Volll::class)
            ->findAll();
        return $this->render('Vol/list.html.twig', ["vol" => $vol]);

    }


    /**
     *@Route("lis", name="lis")
     */
    public function lis():Response
    {
        $vol = $this->getDoctrine()
            ->getRepository(Volll::class)
            ->findAll();
        return $this->render('Vol/aff.html.twig', ["vol" => $vol]);

    }


    /**
     * @param $id
     * @return Response
     * @Route("/deletec/{id}", name="delete")
     */
    public function delete($id):Response
    {
        $c=$this->getDoctrine()->getRepository(Volll::class)
            ->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($c);
        $em->flush();
        return $this->redirectToRoute("list");
    }

    /**
     * @Route("update/{id}", name="update")
     */
    public function update(Request $request,$id)
    {
        $c=$this->getDoctrine()->getRepository(Volll::class)
            ->find($id);
        $form=$this->createForm(FormulaireType::class,$c);
        $form->add("Modifier",SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();

            return $this->redirectToRoute('list');
        }
        return $this->render("Vol/update.html.twig",["form"=>$form->createView()]);

    }

    /**
 * @Route("/calenderiervol", name="calenderiervol")
 */
    public function calenderiervols(CalendarRepository $calendar)
    {
        $vols = $calendar->findAll();

        $rdvs = [];

        foreach($vols as $vol){
            $rdvs[] = [
                'id' => $vol->getId(),
                'start' => $vol->getStart()->format('Y-m-d H:i:s'),
                'end' => $vol->getEnd()->format('Y-m-d H:i:s'),
                'title' => $vol->getTitle(),
                'description' => $vol->getDescription(),
                'backgroundColor' => $vol->getBackgroundColor(),
                'borderColor' => $vol->getBorderColor(),
                'textColor' => $vol->getTextColor(),
                'allDay' => $vol->getAllDay(),
            ];
        }

        $data = json_encode($rdvs);

        return $this->render('vol/index2.html.twig', compact('data'));
    }

    /**
     * @Route("vol/recherche", name="recherche_vol")
     */
    public function rechercheVol(Request $request,VolllRepository $volRepository): Response
    {
        $recherche = $request->get("valeur-recherche");
        $recs = $volRepository->findStartingWith($recherche);

        $recsJson = [];
        $recsJsonn = [];
        $i = 0;
        foreach ($recs as $rec) {
            //   $recsJson[$i]["dateMatch"] = $rec->getDateMatch();
            $recsJsonn[$i]["destination"] = $rec->getId();
            $vols = $this->getDoctrine()->getRepository(Volll::class)->findBy(['destination' => $recsJsonn[$i]["destination"]]);
            foreach ($vols as $v){
                $recsJson[$i]["id"] = $v->getId();
                $recsJson[$i]["date"] = $v->getDatevolll()->format('Y-m-d H:i:s');
                $recsJson[$i]["prix"] = $v->getPrixvolll();
                $recsJson[$i]["destination"] = $v->getDestination()->getVilleDep();
                $recsJson[$i]["destination2"] = $v->getDestination()->getVilleArr();


                // $recsJson[$i]["message"] = $rec->getMessage();
                // $recsJson[$i]["statut"] = $rec->getStatut();

                // if ($rec->getReponse()){
                //     $recsJson[$i]["id"] = $rec->getReponse()->getId();

                //     $recsJson[$i]["hasRep"] = $rec->getReponse();
                // }

                $i++;
            }
        }
        // dump( $recsJson);die;
        return new Response(json_encode($recsJson));
    }
}
