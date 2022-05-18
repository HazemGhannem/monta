<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Entity\Chambre;
use App\Entity\Commentaire;
use App\Entity\Reclammation;
use App\Entity\Reponse;
use App\Entity\User;
use App\Repository\ChambreRepository;
use App\Repository\HotelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Snipe\BanBuilder\CensorWords;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\SerializerInterface;

class MobileController extends AbstractController
{
    /**
     * @Route("/mobile", name="app_mobile")
     */
    public function index(): Response
    {
        return $this->render('mobile/index.html.twig', [
            'controller_name' => 'MobileController',
        ]);
    }
    // user
    /**
     * @Route("/signupMobile", name="signupMobile")
     */
    public function signupMobile(Request $request, UserPasswordEncoderInterface $encoder, SerializerInterface $serializer,\Swift_Mailer $mailer ): Response
    {
        $email = $request->query->get("email");
        $nom = $request->query->get("nom");
        $prenom = $request->query->get("prenom");
        $cin = $request->query->get("cin");
        $sexe = $request->query->get("sexe");
        $password = $request->query->get("password");
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return new Response("email invalid");
        }
        $user = new User();
        $user->setEmail($email);
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setCin($cin);
        $user->setSexe($sexe);
        $user->setRoles(['ROLE_USER']);
        $user->setImage("untitled.jpg");
        $user->setPassword($password);

        // On crée le message
        $message = (new \Swift_Message('Nouveau compte'))
            // On attribue l'expéditeur
            ->setFrom('projetenergym@gmail.com')
            // On attribue le destinataire
            ->setTo($email)
            // On crée le texte avec la vue
            ->setBody(
                "Bonjour vous avez creer un compte"
            );



        $mailer->send($message);

        try {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return new JsonResponse("Account is created", 200);
        } catch (\Exception$ex) {
            return new Response("exception" . $ex->getMessage());
        }
    }
    /**
     * @Route("/signinMobile", name="signinMobile")
     */
    public function signinAction(Request $request,SerializerInterface $serializer)
    {
        $email = $request->query->get("email");
        $password = $request->query->get("password");
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);
        if ($user) {
            if ($password==$user->getPassword()) {
                $formatted = $serializer->normalize($user, 'json', ['groups' => 'post:read']);
                return new Response(json_encode($formatted));

            }
            else {

                return new Response("passowrd not found");
            }
        }
        else {
            return new Response("user not found");
        }

    }
    /**
     * @Route("/editUserMobile", name="editUserMobile")
     */
    public function editUserMobile(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->query->get("id");
        $email = $request->query->get("email");
        $nom = $request->query->get("nom");
        $prenom = $request->query->get("prenom");
        $cin = $request->query->get("cin");
        $sexe = $request->query->get("sexe");
        $password = $request->query->get("password");
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);

            //   $filename = $file->getClientOriginalName();
            //   $file->move($filename);
            //  $user->setImageFile($filename);
            $user->setEmail($email);
            $user->setNom($nom);
            $user->setPrenom($prenom);
            $user->setCin($cin);
            $user->setSexe($sexe);
          //  $user->setRoles(['ROLE_USER']);
            $user->setImage("untitled.jpg");
            $user->setPassword($password);

        try{
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new JsonResponse("success",200);
        }catch(\Exception $ex){
            return new Response("fail".$ex->getMessage());
        }
    }
    /**
     * @Route("/ShowAllUsers", name="ShowAllUsers")
     */
    public function ShowAllUsers(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findAll();
        $formatted = $serializer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/passwordMobile", name="passwordMobile")
     */
    public function getPasswordbyEmail(Request $request,SerializerInterface $serializer,\Swift_Mailer $mailer)
    {
        $email = $request->query->get("email");
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['email' => $email]);
        if ($user) {
            $password=$user->getPassword();

            $formatted = $serializer->normalize($password, 'json', ['groups' => 'post:read']);
            return new Response(json_encode($formatted));

        }
        else {
            return new Response("user not found");
        }

    }
  // avis
    /**
     * @Route("/ShowAllAvis", name="ShowAllAvis")
     */
    public function ShowAllAvis(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Avis::class)->findAll();
        $formatted = $serializer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/AddAvis", name="AddAvis")
     */
    public function AddAvis(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $note=$request->get('note') ;
        $avis = new Avis();
        $avis->setNote($note);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($avis);
        $entityManager->flush();

        $formatted = $serializer->normalize($avis, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/UpdateAvis", name="UpdateAvis")
     */
    public function UpdateAvis(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $avis = $em->getRepository(Avis::class)->find($id);
        $note=$request->get('note') ;
        $avis->setNote($note);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($avis);
        $entityManager->flush();

        $formatted = $serializer->normalize($avis, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/DeleteAvis", name="DeleteAvis")
     */
    public function DeleteAvis(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $avis = $em->getRepository(Avis::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($avis);
        $entityManager->flush();

        $formatted = $serializer->normalize($avis, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    // comment
       /**
     * @Route("/ShowAllComments", name="ShowAllComments")
     */
    public function ShowAllComments(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Commentaire::class)->findAll();
        $formatted = $serializer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/ShowAllCommentsbyid", name="ShowAllCommentsbyid")
     */
    public function ShowAllCommentsbyid(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Commentaire::class)->findBy(array('avis'=>$id));
        $formatted = $serializer->normalize($user, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/AddComment", name="AddComment")
     */
    public function AddComment(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $note=$request->get('comm_avis') ;
        $avisid=$request->get('avis') ;
        $commentaire = new Commentaire();
        $avis = $em->getRepository(Avis::class)->find($avisid);
        $censor = new CensorWords;
        $badwords = $censor->setDictionary('fr');
        $cleanedComment = $censor->censorString($note);
        $commentaire->setCommAvis($cleanedComment['clean']);
        $commentaire->setAvis($avis);
        $commentaire->setDateCom(new \DateTime());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($commentaire);
        $entityManager->flush();

        $formatted = $serializer->normalize($commentaire, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/UpdateComment", name="UpdateComment")
     */
    public function UpdateComment(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $commentaire = $em->getRepository(Commentaire::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $note=$request->get('comm_avis') ;
        $avisid=$request->get('avis') ;
        $avis = $em->getRepository(Avis::class)->find($avisid);
        $commentaire->setCommAvis($note);
        $commentaire->setAvis($avis);
        $commentaire->setDateCom(new \DateTime());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($commentaire);
        $entityManager->flush();

        $formatted = $serializer->normalize($commentaire, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/DeleteComment", name="DeleteComment")
     */
    public function DeleteComment(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $avis = $em->getRepository(Commentaire::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($avis);
        $entityManager->flush();

        $formatted = $serializer->normalize($avis, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route ("/tridescMobilee", name="tridescMobilee")
     */
    public function tridescMobilee(Request $request, SerializerInterface $serializer){
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository(Commentaire::class);
        $commentaire=$repository->triDateDESC();
        $formatted = $serializer->normalize($commentaire,'json',['groups' => 'post:read']);
        return new Response(json_encode($formatted)) ;

    }
    // Reclamation
    /**
     * @Route("/ShowAllReclamation", name="ShowAllReclamation")
     */
    public function ShowAllReclamation(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclammation::class)->findAll();
        $formatted = $serializer->normalize($reclamation, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }

    /**
     * @Route("/AddReclamation", name="AddReclamation")
     */
    public function AddReclamation(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $obj=$request->get('objet') ;
        $msg=$request->get('message') ;
        $idclient=$request->get('clientid') ;
        $reclamation = new Reclammation();
        $reclamation->setMessage($msg);
        $reclamation->setObjet($obj);
        $reclamation->setStatut("En cours");
        $reclamation->setClientId($idclient);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reclamation);
        $entityManager->flush();

        $formatted = $serializer->normalize($reclamation, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/UpdateReclamation", name="UpdateReclamation")
     */
    public function UpdateReclamation(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclammation::class)->find($id);
        $obj=$request->get('objet') ;
        $msg=$request->get('message') ;
        $reclamation->setMessage($msg);
        $reclamation->setObjet($obj);
        $reclamation->setStatut("En cours");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reclamation);
        $entityManager->flush();

        $formatted = $serializer->normalize($reclamation, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/DeleteReclamation", name="DeleteReclamation")
     */
    public function DeleteReclamation(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclammation::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($reclamation);
        $entityManager->flush();

        $formatted = $serializer->normalize($reclamation, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/displayreclamationMobile", name="displayreclamationMobile")
     */
    public function displayreclamationMobile(Request $request, SerializerInterface $serializer): Response
    {
        $id=$request->get('id');
        $reclamation = $this->getDoctrine()->getRepository(Reclammation::class)->findBy(array('client_id'=>$id));
        $formatted = $serializer->normalize($reclamation,'json',['groups' => 'post:read']);
        return new Response(json_encode($formatted)) ;
    }
    // reponse
    /**
     * @Route("/ShowAllReponse", name="ShowAllReponse")
     */
    public function ShowAllReponse(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository(Reponse::class)->findAll();
        $formatted = $serializer->normalize($reponse, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }

    /**
     * @Route("/AddReponse", name="AddReponse")
     */
    public function AddReponse(Request $request,SerializerInterface $serializer, \Swift_Mailer $mailer)
    {
        $em = $this->getDoctrine()->getManager();
        $rep=$request->get('repmessage') ;
        $rec=$request->get('reclamation') ;
        $reponse = new Reponse();
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository(Reclammation::class)->find($rec);
        $reclamation->setStatut("Traitée");
        $reponse->setRepmessage($rep) ;
        $reponse->setReclamation($reclamation);
//mail
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




        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reponse);
        $entityManager->flush();

        $formatted = $serializer->normalize($reponse, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/UpdateReponse", name="UpdateReponse")
     */
    public function UpdateReponse(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository(Reponse::class)->find($id);
        $rep=$request->get('repmessage') ;
        $rec=$request->get('reclamation') ;
        $reclamation = $em->getRepository(Reclammation::class)->find($rec);
        $reponse->setRepmessage($rep) ;
        $reponse->setReclamation($reclamation);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($reponse);
        $entityManager->flush();

        $formatted = $serializer->normalize($reponse, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route("/DeleteReponse", name="DeleteReponse")
     */
    public function DeleteReponse(Request $request,SerializerInterface $serializer, UserPasswordEncoderInterface $encoder)
    {
        $id=$request->get('id');
        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository(Reponse::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($reponse);
        $entityManager->flush();

        $formatted = $serializer->normalize($reponse, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));
    }
    /**
     * @Route ("/tristatutMobilee", name="tristatutMobilee")
     */
    public function tristatusMobilee(Request $request, SerializerInterface $serializer)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repository = $entityManager->getRepository(Reclammation::class);
        $commentaire = $repository->tristatutDESC();
        $formatted = $serializer->normalize($commentaire, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($formatted));

    }






}
