<?php
namespace App\Controller;

use App\Model\Animaux;
use Core\Controller\DefaultController;

class AnimauxController extends DefaultController {
    

    // fonction qui va chercher les infos pour les mettre ds le templates
   // #[Route("/", methods: ["GET"])]
    public function index()
    {
        $model = new Animaux(Animaux::class);
        $animaux = $model->returnLast30Jours();
        //var_dump($model);exit;

        $this->render("animaux/index", [
            "animaux" => $animaux
        ]);
    }

    // fonction qui va chercher les infos des animaux adoptés pour les mettre ds le templates
    // #[Route("/adoption", methods: ["GET"])]
    public function adoption()
    {
        $model = new Animaux(Animaux::class);
        $animaux = $model->dispoAdoption();
    

        $this->render("animaux/adoptes", [
            "animaux" => $animaux
        ]);
    }
    
}