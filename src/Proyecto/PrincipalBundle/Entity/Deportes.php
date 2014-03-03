<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deportes
 *
 * @ORM\Table(name="Deportes")
 * @ORM\Entity
 */
class Deportes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDeportes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddeportes;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var \Cancha
     *
     * @ORM\ManyToOne(targetEntity="Cancha")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cancha", referencedColumnName="idCancha")
     * })
     */
    private $cancha;

    /**
     * @var \Entrenador
     *
     * @ORM\ManyToOne(targetEntity="Entrenador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Entrenador", referencedColumnName="idEntrenador")
     * })
     */
    private $entrenador;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Categoria", referencedColumnName="idCategoria")
     * })
     */
    private $categoria;



    /**
     * Get iddeportes
     *
     * @return integer 
     */
    public function getIddeportes()
    {
        return $this->iddeportes;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Deportes
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
     * Set cancha
     *
     * @param \Proyecto\PrincipalBundle\Entity\Cancha $cancha
     * @return Deportes
     */
    public function setCancha(\Proyecto\PrincipalBundle\Entity\Cancha $cancha = null)
    {
        $this->cancha = $cancha;
    
        return $this;
    }

    /**
     * Get cancha
     *
     * @return \Proyecto\PrincipalBundle\Entity\Cancha 
     */
    public function getCancha()
    {
        return $this->cancha;
    }

    /**
     * Set entrenador
     *
     * @param \Proyecto\PrincipalBundle\Entity\Entrenador $entrenador
     * @return Deportes
     */
    public function setEntrenador(\Proyecto\PrincipalBundle\Entity\Entrenador $entrenador = null)
    {
        $this->entrenador = $entrenador;
    
        return $this;
    }

    /**
     * Get entrenador
     *
     * @return \Proyecto\PrincipalBundle\Entity\Entrenador 
     */
    public function getEntrenador()
    {
        return $this->entrenador;
    }

    /**
     * Set categoria
     *
     * @param \Proyecto\PrincipalBundle\Entity\Categoria $categoria
     * @return Deportes
     */
    public function setCategoria(\Proyecto\PrincipalBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;
    
        return $this;
    }

    /**
     * Get categoria
     *
     * @return \Proyecto\PrincipalBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}