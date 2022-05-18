<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\Hotel;
use App\Form\ChambreType;
use App\Form\HotelType;
use App\Repository\ChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChambreController extends AbstractController
{
    /**
     * @Route("/chambre", name="chambre")
     */
    public function index(): Response
    {
        return $this->render('chambre/wishlist.html.twig', [
            'controller_name' => 'ChambreController',
        ]);
    }


    /**
     * @Route("/ajouterchambre",name="ajouterchambre")
     */
    public function ajouterchambre(EntityManagerInterface $em,Request $request){
        $chambre= new Chambre();

        $form= $this->createForm(ChambreType::class,$chambre);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){


            $em->persist($chambre);
            $em->flush();

            return $this->redirectToRoute("afficherchambre");

        }
        return $this->render("chambre/ajouterchambre.html.twig",array("formulaire"=>$form->createView()));
    }



    /**
     * @Route("/afficherchambre",name="afficherchambre")
     */
    public function Affiche(ChambreRepository $repository){
        $tablechambres=$repository->listchambrebyPrix();
        return $this->render('chambre/afficherchambre.html.twig'
            ,['tablehotels'=>$tablechambres]);

    }

    /**
     * @Route("/supprimerchambre/{id}",name="supprimerchambre")
     */
    public function supprimerchambre($id,EntityManagerInterface $em ,ChambreRepository $repository){
        $chambre=$repository->find($id);
        $em->remove($chambre);
        $em->flush();

        return $this->redirectToRoute('afficherchambre');
    }

    /**
     * @Route("/{id}/modifierchambre", name="modifierchambre", methods={"GET","POST"})
     */
    public function editChambre(Request $request, Chambre $chambre): Response
    {
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->add('Confirmer',SubmitType::class);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();


            return $this->redirectToRoute('afficherchambre');
        }

        return $this->render('chambre/modifierchambre.html.twig', [
            'chambremodif' => $chambre,
            'form' => $form->createView(),
        ]);
    }




}
