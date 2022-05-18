<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function afficher()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll(array('roles' => 'asc'));


        return $this->render('admin/administrations.html.twig', [
            'users' => $users
        ]);
    }





    /**
     * @Route("/ajoutuser", name="ajoutuser")
     */
    public function ajout(Request $request,UserPasswordEncoderInterface $passwordEncoder): Response
    {
        if($request->getMethod()=='POST') {
            $user = new User();
            $user->setNom($request->get('nom'));
            $user->setEmail($request->get('email'));
            $user->setPrenom($request->get('prenom'));
            $user->setCin($request->get('cin'));
            $user->setSexe($request->get('sexe'));
            $user->setPassword($request->get('password'));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute('admin'
            );
        }
        return $this->render('admin/ajouteruser.html.twig'
        );
    }
    /**
     * @Route("/modifuser/{iduser}", name="modifuser")
     */
    public function modifier(Request $request, $iduser,UserPasswordEncoderInterface $passwordEncoder): Response
    {


        $user=$this->getDoctrine()->getRepository(User::class)->find($iduser);


        if($request->getMethod()=='POST') {
            $user->setNom($request->get('nom'));
            $user->setPrenom($request->get('prenom'));
            $user->setCin($request->get('cin'));
            $user->setSexe($request->get('sexe'));

            $user->setPassword($request->get('password'));
            $user->setRoles($request->get('role'));
            $user->setEmail($request->get('email'));



            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('admin'
            );
        }
        return $this->render('admin/modifieruser.html.twig',[
            'users'=>$user

        ]);
    }
    /**
     * @Route("/suppuser/{iduser}", name="suppuser")
     */

    public function supprimer(Request $request, $iduser) {
        $user=$this->getDoctrine()->getRepository(User::class)->find($iduser);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        $response = new Response();
        $response->send();

        return $this->redirectToRoute('admin');
    }
    /**
     * @Route("/admin/recherche", name="recherche_reclamation")
     */
    public function rechercheUser(Request $request, NormalizerInterface $normalizer): Response
    {
        $user = $request->get("valeur-recherche");
        $recs = $this->getDoctrine()->getRepository(User::class)->findStartingWith($user);

        $recsJson = [];
        $i = 0;
        foreach ($recs as $rec) {
            $recsJson[$i]["email"] = $rec->getEmail();
            $recsJson[$i]["nom"] = $rec->getNom();
            $recsJson[$i]["prenom"] = $rec->getPrenom();
            $recsJson[$i]["cin"] = $rec->getCin();
            $recsJson[$i]["sexe"] = $rec->getSexe();
            $recsJson[$i]["id"] = $rec->getId();


            $i++;
        }
        return new Response(json_encode($recsJson));
    }
    /**
     * @Route("user/{id}/desactiver", name="desactiver-user")
     */
    public function desactiverUser($id)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setEnabled(0);
        $user->setRoles(["ROLE_USER","ROLE_BLOQ"]);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('admin');
    }

    /**
     * @Route("user/{id}/activer", name="activer-user")
     */
    public function activerUser($id)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setEnabled(1);
        $user->setRoles(["ROLE_USER"]);
        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('admin');
    }
}
