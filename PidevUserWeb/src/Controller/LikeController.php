<?php

namespace App\Controller;

use App\Entity\Like;
use App\Entity\Article;
use App\Entity\Blogueur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class LikeController extends AbstractController
{
    /**
     * @Route("/like")
     */
    public function like(Request $request): Response
    {
        $blogueur = $this->getDoctrine()->getRepository(Blogueur::class)->find(2);

        $likeType = (int)$request->get('typeLike');
        $idArticle = (int)$request->get('idArticle');

        $article = $this->getDoctrine()->getManager()->getRepository(Article::class)
            ->find($idArticle);

        $haveLike = $this->getDoctrine()->getRepository(Like::class)->findOneBy([
            'blogueur' => $blogueur,
            'article' => $article,
            'typeLike' => true,
        ]);
        $haveDislike = $this->getDoctrine()->getRepository(Like::class)->findOneBy([
            'blogueur' => $blogueur,
            'article' => $article,
            'typeLike' => false,
        ]);

        $jsonContent['haveLike'] = $haveLike != null;
        $jsonContent['haveDislike'] = $haveDislike == null;

        if ($likeType == 1) {
            $this->addLike($haveLike, $likeType, $blogueur, $request->get('idArticle'));
        } else {
            $this->addLike($haveDislike, $likeType, $blogueur, $request->get('idArticle'));
        }

        $nombreObjets = $this->getDoctrine()->getRepository(Like::class)->nombreObjets($idArticle);
        $nombreLikes = $this->getDoctrine()->getRepository(Like::class)->nombreLikes($idArticle);

        if ($nombreLikes != 0) {
            $pourcentage = ($nombreLikes / $nombreObjets) * 100;
        } else {
            $pourcentage = 0;
        }

        $article->setPourcentageLike($pourcentage);

        $repository = $this->getDoctrine()->getManager();
        $repository->persist($article);
        $repository->flush();

        $jsonContent['nbLike'] = $nombreLikes;
        $jsonContent['nbDislike'] = ($nombreObjets - $nombreLikes);
        $jsonContent['pourcentage'] = $pourcentage;
        return new Response(json_encode($jsonContent));
    }

    function addLike($haveLike, $typeLike, $blogueur, $idArticle)
    {

        if ($haveLike == null) {
            $like = new Like();
            $like->setTypeLike($typeLike);
            $article = $this->getDoctrine()->getManager()->getRepository(Article::class)->find($idArticle);

            $like->setArticle($article);
            $like->setBlogueur($blogueur);

            $repository = $this->getDoctrine()->getManager();
            $repository->persist($like);
            $repository->flush();

        } else {
            $missionManager = $this->getDoctrine()->getManager();
            $missionManager->remove($haveLike);
            $missionManager->flush();
        }
    }
}