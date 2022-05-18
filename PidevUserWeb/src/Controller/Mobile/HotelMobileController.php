<?php

namespace App\Controller\Mobile;

use App\Entity\Hotel;
use App\Repository\HotelRepository;
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
 * @Route("/mobile/hotel")
 */
class HotelMobileController extends AbstractController
{
    /**
     * @Route("", methods={"GET"})
     */
    public function index(HotelRepository $hotelRepository,NormalizerInterface $Normalizer): Response
    {
        $hotels = $hotelRepository->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $Normalizer->normalize($hotels, 'json', ['groups' => 'post:read']);
        if ($hotels) {
            return new JsonResponse($formatted, 200);
        } else {
            return new JsonResponse([], 204);
        }
    }

    /**
     * @Route("/show", methods={"POST"})
     */
    public function show(Request $request, HotelRepository $hotelRepository): Response
    {
        $hotel = $hotelRepository->find((int)$request->get("id"));

        if ($hotel) {
            return new JsonResponse($hotel, 200);
        } else {
            return new JsonResponse([], 204);
        }
    }

    /**
     * @Route("/add")
     * methods={"POST"}
     */
    public function add(Request $request): JsonResponse
    {
        $hotel = new Hotel();

        return $this->manage($hotel, $request);
    }

    /**
     * @Route("/edit")
     *  methods={"POST"}
     */
    public function edit(Request $request, HotelRepository $hotelRepository): Response
    {
        $hotel = $hotelRepository->find((int)$request->get("id"));

        if (!$hotel) {
            return new JsonResponse(null, 404);
        }

        return $this->manage($hotel, $request);
    }

    public function manage($hotel, $request): JsonResponse
    {
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
        $hotel->setVille($request->get("ville"));
        $hotel->setNom($request->get("nom"));
        $hotel->setNbChambre($request->get("nbChambre"));
        $hotel->setImghotel( $fileName);
        // $hotel->setUp(
        //     $request->get("ville"),
        //     $request->get("nom"),
        //     (int)$request->get("nbChambre"),
        //     $fileName
        // );

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($hotel);
        $entityManager->flush();

        return new JsonResponse($hotel, 200);
    }

    /**
     * @Route("/delete/{id}")
     *  methods={"POST"}
     */
    public function delete(Request $request, EntityManagerInterface $entityManager, HotelRepository $hotelRepository,$id): JsonResponse
    {
        $hotel = $hotelRepository->find($id);

        if (!$hotel) {
            return new JsonResponse(null, 200);
        }

        $entityManager->remove($hotel);
        $entityManager->flush();

        return new JsonResponse([], 200);
    }

    /**
     * @Route("/deleteAll", methods={"POST"})
     */
    public function deleteAll(EntityManagerInterface $entityManager, HotelRepository $hotelRepository): Response
    {
        $hotels = $hotelRepository->findAll();

        foreach ($hotels as $hotel) {
            $entityManager->remove($hotel);
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
