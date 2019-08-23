<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Article;
use App\Entity\Comment;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use App\Repository\CathegorieRepository;
use App\Entity\Cathegorie;


class TestController extends AbstractController
{
     /**
     * @Route("/", name="index")
     */
     public function index()
     {
         return $this->render('test/index.html.twig', [
             'controller_name' => 'TestController',
         ]);
     }


    /**
     * @Route("/acceuil", name="acceuil")
     */
    public function acceuil(ArticleRepository $repo)
    {
     
      $articles = $repo->findAll();

        return $this->render('test/acceuil.html.twig', [
            'controller_name' => 'TestController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/show/{id}", name="show_test")
     */
     public function show(ArticleRepository $repo, $id)
     {
        
         $article = $repo->find($id);
         return $this->render('test/show.html.twig', [
         'article' => $article
         ]);
     }
     
   

    /**
     * @Route("/article", name="article")
     */
     public function article()
     {
        $repo = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repo->findAll();
  
          return $this->render('test/acceuil.html.twig', [
              'controller_name' => 'TestController',
              'articles' => $articles
          ]);
     }

    /**
     * @Route("/cathegorie", name="cathegorie")
     */
     public function cathegorie()
     {
        $repo = $this->getDoctrine()->getRepository(Cathegorie::class);
        $cathegories = $repo->findAll();
  
          return $this->render('test/cathegorie.html.twig', [
              'controller_name' => 'TestController',
              'cathegories' => $cathegories
          ]);
     }



    /**
     * @Route("/showArticle", name="show_article")
     */
    public function showArticle()
    {
       $categories = $this->getDoctrine()->getRepository(Cathegorie::class)
        ->findAll();
       $articles = $categories->getArticle();

         return $this->render('test/showArticle.html.twig', [
             'controller_name' => 'TestController',
             'article' => $articles
         ]);
    }


     

    

   
}
