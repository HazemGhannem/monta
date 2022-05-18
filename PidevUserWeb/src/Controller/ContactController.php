<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer): Response
    {
        $form=$this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $contact = $form->getData();

            $message = (new \Swift_Message("votre message a été envoyé avec sucées "))

                ->setFrom('viatores10@gmail.com')
                ->setTo('yosra.chekir@esprit.tn')
                ->setBody(
                    $this->renderView(
                        'Email/contact.html.twig'
                    ),
                    'text/html'
                ) ;

            $mailer->send($message);

            $this->addFlash('message','Le message a été bien envoyé');
            return  $this->redirectToRoute('contact');
        }
        return $this->render('contact/contacter.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}