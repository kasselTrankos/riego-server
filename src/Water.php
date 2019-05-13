<?php
use Doctrine\ORM\Mapping as ORM;
// src/Product.php
/**
 * @ORM\Entity @ORM\Table(name="water")
 **/
class Water
{
    /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    protected $id;
    /** @ORM\Column(type="string") **/
    protected $state;
     /**
     * @ORM\OneToOne(targetEntity="Riego")
     * @ORM\JoinColumn(name="riego_id", referencedColumnName="id")
     */
    private $riego;

     public function getId()
    {
        return $this->id;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getRiego()
    {
        return $this->riego;
    }

    public function setRiego($riego)
    {
        $this->riego = $riego;
    }
}