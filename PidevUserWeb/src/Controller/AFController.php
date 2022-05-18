<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Opinion;
use App\Form\Article1Type;
use App\Form\OpinionType;
use App\Repository\ArticleRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/a/f")
 */
class AFController extends AbstractController
{
    /**
     * @Route("/", name="a_f_index", methods={"GET"})
     */
    public function index(Request $request, ArticleRepository $articleRepository, PaginatorInterface $paginator): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render('af/wishlist.html.twig', [
            'totalArticle' => count($articles),
            'articles' =>
                $paginator->paginate($articles,
                    $request->query->getInt('page', 1), 3)
        ]);
    }

    /**
     * @Route("/new", name="a_f_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(Article1Type::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('a_f_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('af/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="a_f_show", methods={"GET"})
     */
    public function show(Article $article): Response
    {

        return $this->render('af/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="a_f_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Article $article): Response
    {
        $form = $this->createForm(Article1Type::class, $article);
        $form->handleRequest($request);
        $opinion = new Opinion();
        $form = $this->createForm(OpinionType::class, $opinion);


        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('a_f_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('af/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
            'opinion_form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="a_f_delete", methods={"POST"})
     */
    public function delete(Request $request, Article $article): Response
    {
        if ($this->isCsrfTokenValid('delete' . $article->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('a_f_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/a/f", name="index")
     */


}




