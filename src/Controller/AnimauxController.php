<?php
namespace App\Controller;

use App\Model\AnimauxModel;
use Core\Controller\DefaultController;

class AnimauxController extends DefaultController {
    

    public function index()
    {
        $model = new AnimauxModel;
        $animaux = $model->findAll();

        $this->render("animaux/index", [
            "animaux" => $animaux
        ]);
    }
}