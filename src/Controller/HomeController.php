<?php

namespace App\Controller;

use Symfony\component\Routing\Annotation\Route;

class HomeController
{

    #[Route('/', name: 'app_index')]
    public function index()
    {
        dd("MA TOUTE 1ERE PAGE D'ACCUEIl");
        //die();
    }

    #[Route('/about', name: 'app_about')]
    public function about()
    {
        dd("LA PAGE A PROPOS");

    }

     
    #[Route('/document', name: 'app_document')]
    
        public function document(){
        dd("LA PAGE DE DOCUMENT");
    }
    
    #[Route('/contact', name: 'app_contact')]
    public function contact()
    {
        dd("La page de contact");

    }

    #[Route('/connexion', name: 'app_connexion')]
    public function connexion()
    {
        dd("La page de connexion");

    }

}