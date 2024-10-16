<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Utility\PythagoreUtility;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

    public function __construct(Type $pythagoreUtility = null) {
        $this->pythagoreUtility = $pythagoreUtility;
    }

     #[Route('/pythagore/view', name: 'app_pythagore')]
    // public function index(): Response
    // {
    //     return $this->render('pythagore/index.html.twig', [
    //         'controller_name' => 'PythagoreController',
    //     ]);
    //  }
    public function DisplayPythagoreAction(){

        $PythagoreHtml = PythagoreUtility::display();
        return $this->render('displayPythagore.html.twig', [
            'PythagoreHtml' => $PythagoreHtml
        ]);
    }
    
}
