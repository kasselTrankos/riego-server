<?php

namespace Terraza\Entity;

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
        $this->date = $date;
    }

    public function getDuration()
    {
        return $this->duration;
    }
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
}
// class_alias('Terraza', 'Terraza_Riego');