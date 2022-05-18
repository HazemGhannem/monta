<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReclammationRepository;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reponse")
 */
class ReponseController extends AbstractController
{
    /**
     * @Route("/", name="reponse_index", methods={"GET"})
     */
    public function index(ReponseRepository $reponseRepository): Response
    {
        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/new", name="reponse_new", methods={"GET","POST"})
     */
    public function new(Request $request, int $id, ReclammationRepository $reclammationRepository,\Swift_Mailer $mailer): Response
    {
        $reclamation = $reclammationRepository->find($id);
        $reponse = new Reponse();
        $reponse->setReclamation($reclamation);
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reclamation->setStatut("Traitée");
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reponse);
            $entityManager->flush();

            $mail=[];


            $msg= $reponse->getRepmessage();

            $message = (new \Swift_Message("Votre reclamation a été traité  ".$msg))

                ->setFrom('viatores10@gmail.com')
                ->setTo('samar.saidana@esprit.tn')
                ->setBody(
                    $this->renderView(
                        'Email/contact.html.twig'
                    ),
                    'text/html'
                ) ;

            $mailer->send($message);




            return $this->redirectToRoute('reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reponse_show", methods={"GET"})
     */
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    /**
     * @Route("/client/{id}", name="reponse_showClient", methods={"GET"})
     */
    public function showClient(Reponse $reponse): Response
    {
        return $this->render('reponse/showClient.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reponse_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reponse $reponse): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reponse_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reponse_delete", methods={"POST"})
     */
    public function delete(Request $request, Reponse $reponse): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('hotel', [], Response::HTTP_SEE_OTHER);
    }
}
