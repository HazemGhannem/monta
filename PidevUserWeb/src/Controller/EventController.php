<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;






class EventController extends AbstractController
{



    /*********************************JSON for display***************************************************/
    /**
     * @Route("event/display",name="event_display")
     */

    public function display(){

        $event = $this->getDoctrine()->getManager()->getRepository(Event::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return  new JsonResponse($formatted);
    }
    /*********************************JSON for add***************************************************/
    /**
     * @Route("/AjouterEvent",name="AjouterEvent")
     */
    public function AjouterEvent(Request $request){
        $event = new Event();
        $nomEvent = $request->query->get("nomEvent");
        $dateEvent = $request->query->get("dateEvent");
        $description = $request->query->get("description");
        $image = $request->query->get("image");

        $em =$this->getDoctrine()->getManager();

        $event->setNomEvent($nomEvent);
        $event->setDateEvent($dateEvent);
        $event->setDescription($description);
        $event->setImage($image);
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

        $em->persist($event);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return  new JsonResponse($formatted);
    }


    /**
     * @Route("/event", name="event_index", methods={"GET"})
     */
    /*public function index(EventRepository $eventRepository): Response
    {
        return $this->render('event/index.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }*/
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $events = $this->getDoctrine()->getRepository(Event::class)->findAll();

        return $this->render('event/index.html.twig', [
            'totalEvent' => count($events),
            'events' => $paginator->paginate($events,
                $request->query->getInt('page', 1), 5
            ),
        ]);
    }

    /**
     * @Route("event/affback", name="affback", methods={"GET"})
     */
    /*public function index(EventRepository $eventRepository): Response
    {
        return $this->render('event/index.html.twig', [
            'events' => $eventRepository->findAll(),
        ]);
    }*/
    public function affback(Request $request, PaginatorInterface $paginator): Response
    {
        $events = $this->getDoctrine()->getRepository(Event::class)->findAll();

        return $this->render('event/affback.html.twig', [
            'totalEvent' => count($events),
            'events' => $paginator->paginate($events,
                $request->query->getInt('page', 1), 5
            ),
        ]);
    }



    /**
     * @Route("event/afficherEventMobile",name"afficherEventMobile")
     */
    /*
        public function afficherEventMobile(EventRepository $repository, Request $request,NormalizerInterface $Normalizer){

            $tableevents=$repository->findAll();

            $jsonContent=$Normalizer->normalize($tableevents, 'json', ['groups'=>'post:read'] );
            return  new Response(json_encode($jsonContent));
        }
    */
    /**
     * @Route("event/new", name="event_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserRepository $users, \Swift_Mailer $mailer): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new=$form->getData();

            $entityManager = $this->getDoctrine()->getManager();

            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                //$safeFilename = $slugger->slug($originalFilename);
                $safeFilename = $originalFilename;
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imageFile->move(
                    //$this->getParameter('image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $event->setImage($newFilename);
                $entityManager->persist($event);
                $entityManager->flush();
            }

            $message = (new \Swift_Message("Un nouveau Event a été ajouté  "))

                ->setFrom('viatores10@gmail.com')
                ->setTo('sarra.benmessaoud@esprit.tn')
                ->setBody(
                    $this->renderView(
                        'Email/event.html.twig'
                    ),
                    'text/html'
                ) ;

            $mailer->send($message);

            return $this->redirectToRoute('event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("event/{id}", name="event_show", methods={"GET"})
     */
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    /**
     * @Route("event/{id}/edit", name="event_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Event $event): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("event/{id}", name="event_delete", methods={"POST"})
     */
    public function delete(Request $request, Event $event): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('event_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/rechercheevent", name="rechercheevent")
     */
    public function recherche(Request $request, NormalizerInterface $normalizer): Response
    {
        $event = $request->get("valeur-recherche");
        $recs = $this->getDoctrine()->getRepository(Event::class)->findStartingWith($event);

        $recsJson = [];
        $i = 0;
        foreach ($recs as $rec) {
            $recsJson[$i]["id"] = $rec->getId();
            $recsJson[$i]["nomevent"] = $rec->getNomEvent();
            $recsJson[$i]["dateevent"] = $rec->getDateEvent()->format('y-m-d');
            $recsJson[$i]["description"] = $rec->getDescription();
            $recsJson[$i]["image"] = $rec->getImage();

            $i++;
        }
        return new Response(json_encode($recsJson));
    }

    /******************JSON delete *****************************************/
    /**
     * @Route("/deleteEvent/{id}", name="deleteEvent")
     */

    public function deleteEvent(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository(Event::class)->find($id);
        if($event!=null ) {
            $em->remove($event);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("L'event a ete supprime avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Produit invalide.");
    }

    /*************************************JSON UPDATE produit*******************************************************/

    /**
     * @Route("/updateEvent", name="updateEvent")
     */
    public function updateEvent(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $event = $this->getDoctrine()->getManager()
            ->getRepository(Event::class)
            ->find($request->get("id"));

        $nomEvent = $request->query->get("nomEvent");
        $image = $request->query->get("image");
        $description = $request->query->get("description");
        $dateEvent = $request->query->get("dateEvent");

        $event->setNomEvent($nomEvent);
        $event->setImage($image);
        $event->setDescription($description);
        $event->setDateEvent($dateEvent);


        $em->persist($event);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($event);
        return new JsonResponse("Event a ete modifiee avec success.");

    }
}
