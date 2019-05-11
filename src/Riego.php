<?php
use Doctrine\ORM\Mapping as ORM;
// src/Riego.php
/**
 * @ORM\Entity @ORM\Table(name="riegos")
 **/
class Riego
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    protected $id;
    /** @ORM\Column(type="datetime") **/
    protected $date;
    /** @ORM\Column(type="string") **/
    protected $duration;
    /** @ORM\Column(type="string") **/
    protected $volumen;

     public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }
    
    public function setDate($date)
    {
        $this->name = new DateTime();
    }

    public function getDuration()
    {
        return $this->duration;
    }
    public function setDuration($duration)
    {
        $this->name = $duration;
    }

    public function getVolumen()
    {
        return $this->volumen;
    }
    public function setVolumen($volumen)
    {
        $this->name = $volumen;
    }
}