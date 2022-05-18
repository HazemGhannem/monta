<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * @Route("/article")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="article_index", methods={"GET"})
     */
    public function index(ArticleRepository $articleRepository): Response
    {$x=$articleRepository->findAll();

        return $this->render('article/index.html.twig', [
            'articles' => $x,
        ]);
    }
    /**
     * @Route("/showArticleFront", name="showArticleFront", methods={"GET"})
     */
    public function showFront(ArticleRepository $articleRepository): Response
    {$x=$articleRepository->findAll();

        return $this->render('article/showFront.html.twig', [
            'articles' => $x,
        ]);
    }

    /**
     * @Route("/new", name="article_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $request->files->get('article')['image'];

            $uploads_directory = $this->getParameter('uploads_directory');
            $file_name = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $uploads_directory,
                $file_name
            );
            $article->setImage($file_name);
            $dateTime = date_create_immutable_from_format('m/d/Y', date('m/d/Y'));
            $article->setCreationDate($dateTime);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();

            return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article_show", methods={"GET"})
     */
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="article_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Article $article): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $request->files->get('article')['image'];

            $uploads_directory = $this->getParameter('uploads_directory');
            $file_name = md5(uniqid()) . '.' . $file->guessExtension();
            $file->move(
                $uploads_directory,
                $file_name
            );
            $article->setImage($file_name);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="article_delete", methods={"POST"})
     */
    public function delete(Request $request, Article $article): Response
    {
        if ($this->isCsrfTokenValid('delete' . $article->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('article_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/pdf/{id}", name="pdf" ,  methods={"GET"})
     */
    public function pdf($id,ArticleRepository $repository){

        $article=$repository->find($id);

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('article/pdf.html.twig', [
            'pdf' => $article
        ]);
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        //  $dompdf->stream();
        // Output the generated PDF to Browser (force download)
        $dompdf->stream($article->getTitle(), [
            "Attachment" => false
        ]);




    }


}
