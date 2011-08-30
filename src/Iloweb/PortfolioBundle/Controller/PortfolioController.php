<?php

namespace Iloweb\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Iloweb\PortfolioBundle\Entity\Image;


class PortfolioController extends Controller
{    
    public function newAction()
    {
        //Nouvelle entrée dans le portfolio
        //$image = new Image();
        
        //Création du formulaire pour l'ajout d'une entrée dans le portfolio
        $formBuilder = $this->createFormBuilder();
        
        //Ajout des champs dans le formulaire
        $formBuilder
            ->add('Titre', 'textarea')
            ->add('URL', 'textarea')
            ->add('Image', 'file')
            ->add('Publié ?', 'checkbox')
            ->add('Description', 'textarea');
        
        //Génération du formulaire
        $form = $formBuilder->getForm();
        
        return $this->render('IlowebPortfolioBundle:Image:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
