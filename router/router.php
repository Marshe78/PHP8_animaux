<?php
use App\Controller\AnimauxController;
//var_dump('toto');exit;

if (!empty($_GET) && isset($_GET["method"])) {

    if ($_GET["method"] === "adoption") {
        $controller = new AnimauxController;
        $controller->adoption();
    } 

}else{

        $controller = new AnimauxController;
       // var_dump(new AnimauxController);exit;
        $controller->index();
}