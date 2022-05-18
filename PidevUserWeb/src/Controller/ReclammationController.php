<?php

namespace App\Controller;

use App\Entity\Reclammation;
use App\Form\ReclammationType;
use App\Repository\ReclammationRepository;
use Doctrine\Instantiator\Exception\ExceptionInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/reclammation")
 */
class ReclammationController extends AbstractController
{
    /**
     * @Route("/afficherreclamations", name="reclammation_index", methods={"GET"})
     */
    public function afficherReclamation(Request $request, PaginatorInterface $paginator): Response
    {
        $reclamation = $this->getDoctrine()->getRepository(Reclammation::class)->findAll();

        return $this->render('reclammation/index.html.twig', [
            'totalReclamation' => count($reclamation),
            'reclammations' => $paginator->paginate($reclamation,
                $request->query->getInt('page', 1), 5
            ),
        ]);
    }


    /**
     * @Route("/client", name="reclammation_indexClient", methods={"GET"})
     */
    public function indexClient(ReclammationRepository $reclammationRepository): Response
    {
        return $this->render('reclammation/indexClient.html.twig', [
            'reclammations' => $reclammationRepository->findBy(['client_id' => 0]),
        ]);
    }

    /**
     * @Route("/new", name="reclammation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reclammation = new Reclammation();
        $reclammation->setClientId(0);
        $reclammation->setStatut("En cours");
        $form = $this->createForm(ReclammationType::class, $reclammation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclammation);
            $entityManager->flush();

            return $this->redirectToRoute('reclammation_indexClient', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclammation/new.html.twig', [
            'reclammation' => $reclammation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclammation_show", methods={"GET"})
     */
    public function show(Reclammation $reclammation): Response
    {
        return $this->render('reclammation/show.html.twig', [
            'reclammation' => $reclammation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reclammation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclammation $reclammation): Response
    {
        $form = $this->createForm(ReclammationType::class, $reclammation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclammation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclammation/edit.html.twig', [
            'reclammation' => $reclammation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclammation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclammation $reclammation): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reclammation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclammation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclammation_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/client/recherche", name="recherche_reclamation")
     */
    public function rechercheReclamation(Request $request, NormalizerInterface $normalizer): Response
    {
        $recherche = $request->get("valeur-recherche");
        $recs = $this->getDoctrine()->getRepository(Reclammation::class)->findStartingWith($recherche);

        $recsJson = [];
        $i = 0;
        foreach ($recs as $rec) {
            $recsJson[$i]["objet"] = $rec->getObjet();
            $recsJson[$i]["message"] = $rec->getMessage();
            $recsJson[$i]["statut"] = $rec->getStatut();

            if ($rec->getReponse()){
                $recsJson[$i]["id"] = $rec->getReponse()->getId();

                $recsJson[$i]["hasRep"] = $rec->getReponse();
            }

            $i++;
        }
        return new Response(json_encode($recsJson));
    }
}
