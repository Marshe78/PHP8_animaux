<?php
namespace Core\Manager;

use Core\Interfaces\Manager;


abstract class DefaultManager implements Manager{

    public abstract function getAll();

    public function obligatoire(){}

    
    public function render(string $path, array $attributes = [])
    {
        ob_start();
        extract($attributes);
        include ROOT."templates/$path.php";
        $content = ob_get_clean();
        include ROOT."templates/base.php";
    }
}