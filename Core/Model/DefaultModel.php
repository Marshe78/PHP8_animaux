<?php
namespace Core\Model;

use Core\Database\Database;
use \Datetime;

class DefaultModel {

   
    

    public function __construct(
        protected $table,
        protected $className =""
    )
    {
        $this->db = new Database;
        $this->className = ucfirst($this->table);
    }

    public function findAll()
    {
        $statement = "SELECT * FROM $this->table";
        return $this->db->getData($statement, $this->className);
    }

    public function find($id)
    {
        $statement = "SELECT * FROM $this->table WHERE id = $id";
        return $this->db->getData($statement, $this->className, true);
    }

    // Récuperer les nouveaux arrivants depuis 1 mois
    public function returnLast30Jours(){

        //On récupère la date actuelle -1 mois
        $dateUnMois = new DateTime('-1 months');
        $result = $dateUnMois->format('Y-m-d H:i:s');

        $statement = "SELECT * FROM $this->table WHERE 'dateArrive' < $result";
        return $this->db->getData($statement, $this->className);
    }

    // Récuperer les nouveaux arrivants depuis 1 mois
    public function dispoAdoption(){

        $statement = "SELECT * FROM $this->table WHERE 'adoption' !== false";
        return $this->db->getData($statement, $this->className);
    }

}