<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Article|array findAll()
 * @method Article find($id)
 */
class AnimauxModel extends DefaultModel{

    protected $table = "animaux";

}