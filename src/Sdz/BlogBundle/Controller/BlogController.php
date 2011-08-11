<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    public function listeAction($page)
    {
        if ($page < 1)
        {
            throw new NotFoundHttpException('Page inexistante (page = '.$page.')');
        }
        
        return $this->render('SdzBlogBundle:Blog:liste.html.twig', array('articles' => array(
            array(
                'titre'  => 'Mon weekend a Phi Phi Island !', 
                'slug'   => 'mon-weekend-a-phi-phi-island',
                'auteur' => 'winzou', 
                'date'   => new \DateTime()
            ),
            array(
                'titre'  => 'Repetition du National Day de Singapour', 
                'slug'   => 'repetition-du-national-day-de-singapour', 
                'auteur' => 'winzou', 
                'date'   => new \Datetime()
            ),
            array(
                'titre'  => 'Chiffre d\'affaire en hausse', 
                'slug'   => 'chiffre-d-affaire-en-hausse', 
                'auteur' => 'M@teo21', 
                'date'   => new \Datetime())
        )));
    }
    
    public function voirAction($slug)
    {
        $article = $slug;
        
        return $this->render('SdzBlogBundle:Blog:voir.html.twig', array('article' => $article));
    }
    
    public function ajouterAction()
    {
        return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
    }
    
    public function modifierAction($id)
    {
        return $this->render('SdzBlogBundle:Blog:modifier.html.twig');
    }
    
    public function supprimerAction($id)
    {
        return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
    }
}
