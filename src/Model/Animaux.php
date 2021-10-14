<?php
namespace App\Model;

use Core\Model\DefaultModel;

/**
 * @method Animaux|array findAll()
 * @method Animaux find($id)
 */
class Animaux extends DefaultModel{

    protected $table = "animaux";

}