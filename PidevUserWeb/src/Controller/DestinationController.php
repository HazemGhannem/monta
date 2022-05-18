<?php

namespace App\Controller;

use App\Entity\Destination;
use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\FormDestType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


class DestinationController extends AbstractController
{
    /**
     * @Route("/destination", name="destination")
     */
    public function index(): Response
    {
        return $this->render('destination/wishlist.html.twig', [
            'controller_name' => 'DestinationController',
        ]);
    }
    /**
     *@Route("addDest", name="addDest")
     */
    public function addDest(Request $request)
    {$c=new Destination();
        $form=$this->createForm(FormDestType::class,$c);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();

            return $this->redirectToRoute('liste1');
        }
        return $this->render("destination/wishlist.html.twig",["destination"=>$form->createView()]);
    }

    /**
     * @param $id
     * @return Response
     * @Route("/deletec1/{id}", name="delete1")
     */
    public function delete($id):Response
    {
        $c=$this->getDoctrine()->getRepository(Destination::class)
            ->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($c);
        $em->flush();
        return $this->redirectToRoute("liste1");
    }
    /**
     * @Route("update1/{id}", name="update1")
     */
    public function update(Request $request,$id)
    {
        $c=$this->getDoctrine()->getRepository(Destination::class)
            ->find($id);
        $form=$this->createForm(FormDestType::class,$c);
        $form->add("Modifier",SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($c);
            $em->flush();

            return $this->redirectToRoute('liste1');
        }
        return $this->render("destination/update1.html.twig",["form"=>$form->createView()]);

    }/**
 *@Route("liste1", name="liste1")
 */
    public function liste1():Response
    {
        $destination = $this->getDoctrine()
            ->getRepository(Destination::class)
            ->findAll();

        return $this->render('destination/liste1.html.twig', ["destination" => $destination]);

    }









}


