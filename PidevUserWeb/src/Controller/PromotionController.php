<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Promotion;
use App\Form\PromotionType;
use App\Repository\PromotionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/promotion")
 */
class PromotionController extends AbstractController
{
    /**
     * @Route("/", name="promotion_index", methods={"GET"})
     */
    public function index(PromotionRepository $promotionRepository): Response
    {
        return $this->render('promotion/index.html.twig', [
            'promotions' => $promotionRepository->findAll(),
        ]);
    }
    /*public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $promotions = $this->getDoctrine()->getRepository(Event::class)->findAll();

        return $this->render('promotion/index.html.twig', [
            'totalPromo' => count($promotions),
            'promotions' => $paginator->paginate($promotions,
                $request->query->getInt('page', 1), 5
            ),
        ]);
    }
*/
    /**
     * @Route("/display",name="promotion_display",methods={"GET"})
     */

    public function display(){

        $promo = $this->getDoctrine()->getManager()->getRepository(Promotion::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($promo);
        return  new JsonResponse($formatted);
    }

    /**
     * @Route("/new", name="promotion_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($promotion);
            $entityManager->flush();

            return $this->redirectToRoute('promotion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('promotion/new.html.twig', [
            'promotion' => $promotion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="promotion_show", methods={"GET"})
     */
    public function show(Promotion $promotion): Response
    {
        return $this->render('promotion/show.html.twig', [
            'promotion' => $promotion,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="promotion_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Promotion $promotion): Response
    {
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('promotion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('promotion/edit.html.twig', [
            'promotion' => $promotion,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="promotion_delete", methods={"POST"})
     */
    public function delete(Request $request, Promotion $promotion): Response
    {
        if ($this->isCsrfTokenValid('delete'.$promotion->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($promotion);
            $entityManager->flush();
        }

        return $this->redirectToRoute('promotion_index', [], Response::HTTP_SEE_OTHER);
    }
    /*********************************JSON for add***************************************************/
    /**
     * @Route("/AjouterEvent",name="AjouterEventt")
     */
    public function AjouterPromotion(Request $request){
        $promotion = new Promotion();
        $dateDebut = $request->query->get("dateDebut");
        $dateFin = $request->query->get("dateFin");
        $pourcentage = $request->query->get("pourcentage");


        $em =$this->getDoctrine()->getManager();

        $promotion->setDateDebut($dateDebut);
        $promotion->setDateFin($dateFin);
        $promotion->setPourcentage($pourcentage);

        /*if ($imageFile) {
            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
            try {
                $imageFile->move(
                    'img\bike',
                    $newFilename
                );
            } catch (FileException $e) {
            }
            $Produit->setImage($newFilename);
        }*/

        $em->persist($promotion);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($promotion);
        return  new JsonResponse($formatted);
    }

    /******************JSON delete *****************************************/
    /**
     * @Route("/deleteEvent/{id}", name="deleteEvent")
     */

    public function deletePromotion(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $promotion = $em->getRepository(Promotion::class)->find($id);
        if($promotion!=null ) {
            $em->remove($promotion);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("La promotion a ete supprime avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Promotion invalide.");
    }

    /*************************************JSON UPDATE produit*******************************************************/

    /**
     * @Route("/updateEvent", name="updateEvent")
     */
    public function updateProduit(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $promotion = $this->getDoctrine()->getManager()
            ->getRepository(Promotion::class)
            ->find($request->get("id"));

        $dateDebut = $request->query->get("dateDebut");
        //$image = $request->query->get("image");
        $dateFin = $request->query->get("dateFin");
        $pourcentage = $request->query->get("pourcentage");

        $promotion->setDateDebut($dateDebut);
        //$promotion->setImage($image);
        $promotion->setDateFin($dateFin);
        $promotion->setPourcentage($pourcentage);


        $em->persist($promotion);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($promotion);
        return new JsonResponse("promotion a ete modifiee avec success.");

    }
}
