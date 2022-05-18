<?php

namespace App\Controller;

use App\Entity\Blogueur;
use App\Form\BlogueurType;
use App\Repository\BlogueurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blogueur")
 */
class BlogueurController extends AbstractController
{
    /**
     * @Route("/", name="blogueur_index", methods={"GET"})
     */
    public function index(BlogueurRepository $blogueurRepository): Response
    {
        return $this->render('blogueur/index.html.twig', [
            'blogueurs' => $blogueurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="blogueur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $blogueur = new Blogueur();
        $form = $this->createForm(BlogueurType::class, $blogueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($blogueur);
            $entityManager->flush();

            return $this->redirectToRoute('blogueur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blogueur/new.html.twig', [
            'blogueur' => $blogueur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="blogueur_show", methods={"GET"})
     */
    public function show(Blogueur $blogueur): Response
    {
        return $this->render('blogueur/show.html.twig', [
            'blogueur' => $blogueur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="blogueur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Blogueur $blogueur): Response
    {
        $form = $this->createForm(BlogueurType::class, $blogueur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('blogueur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blogueur/edit.html.twig', [
            'blogueur' => $blogueur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/delete", name="blogueur_delete", methods={"GET","POST"})
     */
    public function delete(Request $request, Blogueur $blogueur): Response
    {
        if ($this->isCsrfTokenValid('delete' . $blogueur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($blogueur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('blogueur_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/{id}/block", name="blogueur_block", methods={"GET","POST"})
     */
    public function block(Request $request, Blogueur $blogueur): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        if ($blogueur->getIsBlocked()) {
            $blogueur->setIsBlocked(false);
        } else {
            $blogueur->setIsBlocked(true);
        }
        $entityManager->persist($blogueur);
        $entityManager->flush();

        return $this->redirectToRoute('blogueur_index', [], Response::HTTP_SEE_OTHER);
    }
}
