<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\Commentaire;
use App\Form\AvisType;
use App\Form\CommentaireType;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/avis")
 */
class AvisController extends AbstractController
{/**
 * @Route("/", name="avis_index", methods={"GET"})
 */

    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $avis = $this->getDoctrine()->getRepository(Avis::class)->findAll();

        return $this->render('avis/index.html.twig', [
            'totalAvis' => count($avis),
            'avis' => $paginator->paginate($avis,
                $request->query->getInt('page', 1), 5
            ),
        ]);
    }


    /**
     * @Route("/new", name="avis_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $avi = new Avis();
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($avi);
            $entityManager->flush();

            return $this->redirectToRoute('avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/new.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/newcomment/{idavis}", name="avis_comment", methods={"GET", "POST"})
     */
    public function newcommentaire(Request $request,$idavis, EntityManagerInterface $entityManager): Response
    {
        $comment= new Commentaire();
        $idavis=$this->getDoctrine()->getRepository(Avis::class)->find($idavis);
        $form = $this->createForm(CommentaireType::class, $comment);
        $form->handleRequest($request);
        $comment=$comment->setAvis($idavis);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="avis_show", methods={"GET"})
     */
    public function show(Avis $avi): Response
    {
        return $this->render('avis/show.html.twig', [
            'avi' => $avi,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="avis_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="avis_delete", methods={"POST"})
     */
    public function delete(Request $request, Avis $avi, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avi->getId(), $request->request->get('_token'))) {
            $entityManager->remove($avi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('avis_index', [], Response::HTTP_SEE_OTHER);
    }
}
