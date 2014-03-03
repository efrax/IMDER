<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Torneo
 *
 * @ORM\Table(name="Torneo")
 * @ORM\Entity
 */
class Torneo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTorneo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtorneo;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Premio", type="string", length=45, nullable=true)
     */
    private $premio;

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
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Categoria", referencedColumnName="idCategoria")
     * })
     */
    private $categoria;

    /**
     * @var \Deportes
     *
     * @ORM\ManyToOne(targetEntity="Deportes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Deportes", referencedColumnName="idDeportes")
     * })
     */
    private $deportes;



    /**
     * Get idtorneo
     *
     * @return integer 
     */
    public function getIdtorneo()
    {
        return $this->idtorneo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Torneo
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
     * Set premio
     *
     * @param string $premio
     * @return Torneo
     */
    public function setPremio($premio)
    {
        $this->premio = $premio;
    
        return $this;
    }

    /**
     * Get premio
     *
     * @return string 
     */
    public function getPremio()
    {
        return $this->premio;
    }

    /**
     * Set cancha
     *
     * @param \Proyecto\PrincipalBundle\Entity\Cancha $cancha
     * @return Torneo
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
     * Set categoria
     *
     * @param \Proyecto\PrincipalBundle\Entity\Categoria $categoria
     * @return Torneo
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

    /**
     * Set deportes
     *
     * @param \Proyecto\PrincipalBundle\Entity\Deportes $deportes
     * @return Torneo
     */
    public function setDeportes(\Proyecto\PrincipalBundle\Entity\Deportes $deportes = null)
    {
        $this->deportes = $deportes;
    
        return $this;
    }

    /**
     * Get deportes
     *
     * @return \Proyecto\PrincipalBundle\Entity\Deportes 
     */
    public function getDeportes()
    {
        return $this->deportes;
    }
}