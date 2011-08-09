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
        
        return $this->render('SdzBlogBundle:Blog:liste.html.twig', array('articles' => array()));
    }
    
    public function voirAction($slug)
    {
        return $this->render('SdzBlogBundle:Blog:voir.html.twig');
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
