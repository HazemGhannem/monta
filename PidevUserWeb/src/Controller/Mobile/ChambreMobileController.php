<?php

namespace App\Controller\Mobile;

use App\Entity\Chambre;
use App\Repository\ChambreRepository;
use App\Repository\HotelRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
/**
 * @Route("/mobile/chambre")
 */
class ChambreMobileController extends AbstractController
{
    /**
     * @Route("", methods={"GET"})
     */
    public function index(ChambreRepository $chambreRepository,NormalizerInterface $Normalizer): Response
    {
        $chambres = $chambreRepository->findAll();
        
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $Normalizer->normalize($chambres, 'json', ['groups' => 'post:read']);
        if ($chambres) {
            return new JsonResponse($formatted, 200);
        } else {
            return new JsonResponse([], 204);
        }
    }

    /**
     * @Route("/show")
     * methods={"POST"}
     */
    public function show(Request $request, ChambreRepository $chambreRepository): Response
    {
        $chambre = $chambreRepository->find((int)$request->get("id"));

        if ($chambre) {
            return new JsonResponse($chambre, 200);
        } else {
            return new JsonResponse([], 204);
        }
    }

    /**
     * @Route("/add")
     *  methods={"POST"}
     */
    public function add(Request $request, HotelRepository $hotelRepository): JsonResponse
    {
        $chambre = new Chambre();

        return $this->manage($chambre, $hotelRepository, $request);
    }

    /**
     * @Route("/edit")
     * methods={"POST"}
     */
    public function edit(Request $request, ChambreRepository $chambreRepository, HotelRepository $hotelRepository): Response
    {
        $chambre = $chambreRepository->find((int)$request->get("id"));

        if (!$chambre) {
            return new JsonResponse(null, 404);
        }

        return $this->manage($chambre, $hotelRepository, $request);
    }

    public function manage($chambre, $hotelRepository, $request): JsonResponse
    {
        $hotel = $hotelRepository->find((int)$request->get("hotel"));
        if (!$hotel) {
            return new JsonResponse("hotel with id " . (int)$request->get("hotel") . " does not exist", 203);
        }

        $file = $request->files->get("file");
        if ($file) {
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            try {
                $file->move($this->getParameter('images_directory'), $fileName);
            } catch (FileException $e) {
                dd($e);
            }
        } else {
            if ($request->get("image")) {
                $fileName = $request->get("image");
            } else {
                $fileName = "null";
            }
        }

        $chambre->setType( $request->get("type"));
        $chambre->setNbLits( $request->get("nbLits"));
        $chambre->setEtage( $request->get("etage"));
        $chambre->setPrix( $request->get("prix"));
        $chambre->setVue( $fileName);
        $chambre->setHotel( $hotel);


        // $chambre->setUp(
        //     $request->get("type"),
        //     $request->get("nbLits"),
        //     (int)$request->get("etage"),
        //     (int)$request->get("prix"),
        //     $fileName,
        //     $hotel
        // );

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($chambre);
        $entityManager->flush();

        return new JsonResponse($chambre, 200);
    }

    /**
     * @Route("/delete/{id}")
     * methods={"POST"}
     */
    public function delete(Request $request, EntityManagerInterface $entityManager, ChambreRepository $chambreRepository,$id): JsonResponse
    {
        $chambre = $chambreRepository->find($id);

        if (!$chambre) {
            return new JsonResponse(null, 200);
        }

        $entityManager->remove($chambre);
        $entityManager->flush();

        return new JsonResponse([], 200);
    }

    /**
     * @Route("/deleteAll", methods={"POST"})
     */
    public function deleteAll(EntityManagerInterface $entityManager, ChambreRepository $chambreRepository): Response
    {
        $chambres = $chambreRepository->findAll();

        foreach ($chambres as $chambre) {
            $entityManager->remove($chambre);
            $entityManager->flush();
        }

        return new JsonResponse([], 200);
    }

    /**
     * @Route("/image/{image}", methods={"GET"})
     */
    public function getPicture(Request $request): BinaryFileResponse
    {
        return new BinaryFileResponse(
            $this->getParameter('images_directory') . "/" . $request->get("image")
        );
    }
}
