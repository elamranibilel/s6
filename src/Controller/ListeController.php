<?php

namespace App\Controller;

use Symfony\component\Routing\Annotation\Route;

class ListeController
{
    #[Route('/liste', name: 'app_liste')]
    public function liste()
    {
        dd("la page de liste");
        //die();
    }

    #[Route('/promotion', name: 'app_promotion')]
    public function promotion()
    {
        dd("La page des promotions");

    }

}