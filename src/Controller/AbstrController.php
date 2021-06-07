<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AbstrController extends AbstractController {

// Montrer pour chaque méthode la méthode dans L'AbstrContr Trait


/**
* @Route("/template")
*/
function renderTemplate()
{
    // On peut passer un objet Response en argument, si on souhaite au préalable l'éditer
    return $this->render('abstrContr.html.twig');
}


/**
* @Route("/template2")
*/
function renderTemplateView()
{
    $view = $this->renderView('abstrContr.html.twig');

} 


/**
* @Route("/redirect")
*/
function redirectToHello()
{
    // Ne pas appler Redirect
    // Rajouter un nom à la route et passer le nom en argument (URL non)
    return $this->redirectToRoute('hello');
} 


/**
* @Route("/error")
*/
function throwError()
{
    throw $this->createNotFoundException('Object not found.');
}

}

