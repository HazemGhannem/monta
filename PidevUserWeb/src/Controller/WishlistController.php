<?php


namespace App\Controller;


use App\Entity\Volll;
use App\Repository\VolllRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishlistController extends AbstractController
{
    /**
     * @Route("/WishList", name="WishList")
     */
    public function index(SessionInterface $session, VolllRepository  $vollRepository)
    {
        $wishlist = $session->get("wishlist", []);

        // On "fabrique" les données
        $dataWishlist = [];

        foreach($wishlist as $id => $quantite){

            $vol = $vollRepository->find($id);
            $dataWishlist[] = [
                "vol" => $vol,
                "quantite" => $quantite

            ];

        }
        return $this->render('wishlist/wishlist.html.twig', compact("dataWishlist"));
    }

    /**
     * @Route("/add/{id}", name="add")
     */
    public function add(Volll $volll, SessionInterface $session)
    {
        $wishlist = $session->get("wishlist", []);
        $id = $volll->getId();

        if(!empty($wishlist[$id])){
            $wishlist[$id]++;
        }else{
            $wishlist[$id] = 1;
        }

        // On sauvegarde dans la session
        $session->set("wishlist", $wishlist);

        return $this->redirectToRoute("WishList");
    }

    /**
     * @Route("/remove/{id}", name="supp")
     */
    public function remove(Volll $volll, SessionInterface $session)
    {
        $wishlist = $session->get("wishlist", []);
        $id = $volll->getId();

        if(!empty($wishlist[$id])){
            if($wishlist[$id] > 1){
                $wishlist[$id]--;
            }else{
                unset($wishlist[$id]);
            }
        }

        // On sauvegarde dans la session
        $session->set("wishlist", $wishlist);
        return $this->redirectToRoute("WishList");
    }


    /**
     * @Route("/delete", name="delete_all")
     */
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("wishlist");

        return $this->redirectToRoute("WishList");
    }
}