<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cancha
 *
 * @ORM\Table(name="Cancha")
 * @ORM\Entity
 */
class Cancha
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idCancha", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcancha;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=45, nullable=true)
     */
    private $direccion;



    /**
     * Get idcancha
     *
     * @return integer 
     */
    public function getIdcancha()
    {
        return $this->idcancha;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Cancha
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Cancha
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
}