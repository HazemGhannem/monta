<?php


namespace App\Controller;


use App\Entity\ResVol;
use App\Form\ReservationType;
use App\Form\ResVolType;
use App\Repository\CalendarRepository;
use App\Repository\ResVolRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ReserveVolController extends AbstractController
{

    /**
     * @param ResVolRepository $Repository
     * @return \symfony\Component\HttpFoundation\Response
     * @Route("/listres", name="listres")
     */
    public function afficheres(ResVolRepository $Repository)
    {
        $resvol= $Repository->findAll();
        return $this->render('reserve_vol/listres.html.twig', [
            'resvol' => $resvol,
        ]);
    }
    /**
     * @param ResVolRepository $Repository
     * @return \symfony\Component\HttpFoundation\Response
     * @return \symfony\Component\HttpFoundation\Request
     * @Route ("/deletereservation/{id}",name="deletereservation")
     */
    public function delete($id)
    {
        $em=$this->getDoctrine()->getManager();
        $reservation=$em->getRepository(ResVol::class)->find($id);
        $em->remove($reservation);
        $em->flush();
        return $this->redirectToRoute('listres');

    }
    /**
     * @Route("/newreservation", name="newreservation")
     */

    public function newreservation(Request $request )
    {   $reservation = new ResVol();
        $form = $this->createForm(ResVolType::class, $reservation);
        $form -> add ('Add a new Reservation', SubmitType::Class);
        $form -> handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $reservation = $form->getData();
            $em= $this->getDoctrine()->getManager();
            $em->persist ($reservation);
            $em->flush();
            return $this->redirectToRoute('listres');
        }
        return $this->render('reserve_vol/newreservation.html.twig', [
            'form_title'=>"Ajouter Une Reservation",
            'form' => $form -> createView (),
        ]);
    }

    /**
     * @Route ("/updatereservation/{id}", name="updatereservation")
     */
    public function updatereservation(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $reservation=$em->getRepository(ResVol::class)->find($id);
        $form=$this->createForm(ResVolType::class,$reservation);
        $form->add('Update/Modifier',SubmitType::Class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            return $this->redirectToRoute('listres');
        }
        return $this->render('reserve_vol/updatereservation.html.twig',[
            'form_title'=>"Modifier Une Reservation",
            'form'=>$form-> createView(),
        ]);
    }
    /**
     * @Route("/pdf2", name="pdf2", methods={"GET"})
     */
    public function pdf(ResVolRepository $resvolRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reserve_vol/pdf2.html.twig', [
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