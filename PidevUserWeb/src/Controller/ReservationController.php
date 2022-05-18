<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Volll;
use App\Form\FormulaireType;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DestinationRepository;
use App\Repository\VolllRepository;
use Symfony\Flex\Options;
use App\Repository\ResVolRepository;


class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/wishlist.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }
    /**
     *@Route("reserver", name="reserver")
     */
    public function reserver(Request $request)
    {
        $c=new Reservation();
        $form=$this->createForm(ReservationType::class,$c);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();

            $em->persist($c);
            $em->flush();

            return $this->redirectToRoute('listes');
        }
        return $this->render("Vol/reserver.html.twig",["form"=>$form->createView()]);
    }

    /**
     *@Route("listes", name="listes")
     */
    public function listes():Response
    {
        $vol = $this->getDoctrine()
            ->getRepository(Reservation::class)
            ->findAll();
        return $this->render('reservation/listes.html.twig', ["vol" => $vol]);

    }

    /**
 * @Route("/pdf2", name="pdf2", methods={"GET"})
 */
    public function pdf(ResVolRepository $resvolRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new \Dompdf\Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('resvol/pdf2.html.twig', [
            'resvol' => $resvolRepository->findAll(),
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);


    }
}
