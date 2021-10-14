<?php
namespace App\Controller;

use App\Model\AnimauxModel;
use Core\Controller\DefaultController;

class AnimauxController extends DefaultController {
    

    // fonction qui va chercher les infos pour les mettre ds le templates
    public function index()
    {
        $model = new AnimauxModel('Animaux');
        $animaux = $model->returnLast30Jours();
        //var_dump($model);exit;

        $this->render("animaux/index", [
            "animaux" => $animaux
        ]);
    }

    // fonction qui va chercher les infos des animaux adoptés pour les mettre ds le templates
    public function adoption()
    {
        $model = new AnimauxModel('Animaux');
        $animaux = $model->dispoAdoption();
    

        $this->render("animaux/adoptes", [
            "animaux" => $animaux
        ]);
    }
    
}