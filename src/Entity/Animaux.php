<?
namespace App\Entity;

use Core\Entity\DefaultEntity;

class Animaux extends DefaultEntity{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $animal;

    /**
     * @var string
     */
    private $race;

    /**
     * @var int
     */
    private $age;

    /**
     * @var int
     */
    private $taille;

    /**
     * @var int
     */
    private $poids;

    /**
     * @var string
     */
    private $photo;

    /**
     *  @var string  "Y-m-d" formatted value
     */
    private $dateArrive;

    /**
     * @var boolean
     */
    private $adoption;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of animal
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * Set the value of animal
     */
    public function setAnimal($animal): self
    {
        $this->animal = $animal;

        return $this;
    }

    /**
     * Get the value of race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set the value of race
     */
    public function setRace($race): self
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of taille
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set the value of taille
     */
    public function setTaille($taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get the value of poids
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     */
    public function setPoids($poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get the value of photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     */
    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of dateArrive
     */
    public function getDateArrive()
    {
        return $this->dateArrive;
    }

    /**
     * Set the value of dateArrive
     */
    public function setDateArrive($dateArrive): self
    {
        $this->dateArrive = $dateArrive;

        return $this;
    }

    /**
     * Get the value of adoption
     */
    public function getAdoption()
    {
        return $this->adoption;
    }

    /**
     * Set the value of adoption
     */
    public function setAdoption($adoption): self
    {
        $this->adoption = $adoption;

        return $this;
    }
}