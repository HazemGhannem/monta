<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Form\HotelType;
use App\Repository\CoursRepository;
use App\Repository\HotelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HotelController extends AbstractController
{


    /**
     * @Route("/ajouterhotel",name="ajouterhotel")
     */
    public function addHotel(EntityManagerInterface $em,Request $request,\Swift_Mailer $mailer ){
        $hotel= new Hotel();

        $form= $this->createForm(HotelType::class,$hotel);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $new=$form->getData();
            $imageFile = $form->get('imghotel')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        'back\img',
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $hotel->setImghotel($newFilename);
            }

            $em->persist($hotel);
            $em->flush();


            $mail=[];


            $msg= $hotel->getNom();

            $message = (new \Swift_Message("Un nouveau Hotel a été ajouté  ".$msg))

                ->setFrom('viatores10@gmail.com')
                ->setTo('khaled.ghouili@esprit.tn')
                ->setBody(
                    $this->renderView(
                        'Email/contact.html.twig',compact('new')
                    ),
                    'text/html'
                ) ;

            $mailer->send($message);




            return $this->redirectToRoute("afficherhotel");

        }
        return $this->render("hotel/ajouterhotel.html.twig",array("formulaire"=>$form->createView()));
    }

    /**
     * @Route("/afficherhotel",name="afficherhotel")
     */
    public function Affiche(Request  $request,HotelRepository $repository,PaginatorInterface  $paginator){
        $tablehotels=$repository->listHotelByChambres();
        $tablehotels=$paginator->paginate($tablehotels,
            $request->query->getInt('page',1),
            4


        );
        return $this->render('hotel/afficherhotel.html.twig'
            ,['tablehotels'=>$tablehotels]);

    }
    /**
     * @Route("/afficherhotelClient",name="afficherhotelClient")
     */
    public function afficherhotelClient(HotelRepository $repository){
        $tablehotels=$repository->findAll();
        return $this->render('hotel/AfficheHotelClient.html.twig'
            ,['tablehotels'=>$tablehotels]);





    }

    /**
     * @Route("/afficherhotelClientmobile",name="afficherhotelClientmobile")
     */
    public function afficherhotelClientmobile (HotelRepository $repository,Request $request , NormalizerInterface $Normalizer){
        $tablehotels=$repository->findAll();

        $jsonContent=$Normalizer->normalize($tablehotels, 'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));



    }

    /**
     * @Route("/supprimerhotel/{id}",name="supprimerhotel")
     */
    public function supprimerHotel($id,EntityManagerInterface $em ,HotelRepository $repository){
        $hotel=$repository->find($id);
        $em->remove($hotel);
        $em->flush();

        return $this->redirectToRoute('afficherhotel');
    }

    /**
     * @Route("/{id}/modifierhotel", name="modifierhotel", methods={"GET","POST"})
     */
    public function edit(Request $request, Hotel $hotel): Response
    {
        $form = $this->createForm(HotelType::class, $hotel);
        $form->add('Confirmer',SubmitType::class);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imghotel')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                try {
                    $imageFile->move(
                        'back\img',
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }
                $hotel->setImghotel($newFilename);
            }
            $this->getDoctrine()->getManager()->flush();


            return $this->redirectToRoute('afficherhotel');
        }

        return $this->render('hotel/modifierhotel.html.twig', [
            'hotelmodif' => $hotel,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/hotel/{id}",name="get_hotel_info")

     */

    public function getById (HotelRepository $repository, Request $request  )
    {

        $id = $request->get('id');

        $hotel = $repository->findOneBy(['id' => $id]);




        return $this->render("hotel/afficherdetailhotel.html.twig",['hotel' => $hotel]) ;

    }




    /**
     * @Route("/stat", name="stat")
     */
    public function statAction(HotelRepository $repo)
    {
        $hotels= $repo->findAll();
        $hotel= [];
        $coursCount= [];



        foreach($hotels as $hotel){
            $hotelnomm[]=$hotel->getNom();
            $hotelVille[]= $hotel->getVille();
        }


        foreach($hotels as $hotel ){
            $hotelnom[]=$hotel->getNom();
            $hotelCount[]= count($hotel->getRelation());
        }

        return $this->render('hotel/dashbord.html.twig',
            [
                'hotelNom' => json_encode($hotelnom),
                'hotelcount' => json_encode($hotelCount), 'base2' => 'base2',
                'hotelVille'=> json_encode($hotelVille),
                'hotelnomm'=> json_encode($hotelnomm),

            ]);


    }



    /**
     * @Route("/pdf/{id}", name="pdf" ,  methods={"GET"})
     */
    public function pdf($id,HotelRepository $repository){

        $hotel=$repository->find($id);

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('hotel/pdf.html.twig', [
            'pdf' => $hotel
        ]);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        //  $dompdf->stream();
        // Output the generated PDF to Browser (force download)
        $dompdf->stream($hotel->getNom(), [
            "Attachment" => false
        ]);




    }
    /**
     * @Route("/rating",name="rating")
     */
    public function rating(){

        return $this->render('hotel/rating.html.twig'
        );





    }














}