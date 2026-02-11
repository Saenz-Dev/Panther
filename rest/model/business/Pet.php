<?php

/**
 * <b>Descripcion:</b> Clase que <br/>contiene las mascotas de la aplicación
 * <b>Caso de Uso:</b> PANTHER-Seguridad <br/>
 *
 * @author Miguel Angel Saenz Tibambre <a href = "mailto:miguel.saenz02@uptc.edu.co">miguel.saenz02@uptc.edu.co</a>
 */
class Pet
{

    /**
     * Identificador de la clase
     *
     * @var float Id
     */
    public $id;

    /**
     * Nombre de mascota
     *
     * @var string pet
     */
    public $name;

    /**
     * Raza de mascota
     *
     * @var string race
     */
    public $race;

    /**
     * Genero de mascota
     *
     * @var string gender
     */
    public $gender;
    /**
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the $race
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @return the $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param number $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $race
     */
    public function setRace($race)
    {
        $this->race = $race;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
}
?>