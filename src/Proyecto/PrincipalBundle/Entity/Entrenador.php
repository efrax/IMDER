<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrenador
 *
 * @ORM\Table(name="Entrenador")
 * @ORM\Entity
 */
class Entrenador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEntrenador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identrenador;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Cedula", type="string", length=45, nullable=true)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="Disciplina", type="string", length=45, nullable=true)
     */
    private $disciplina;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=45, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=45, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=45, nullable=true)
     */
    private $email;



    /**
     * Get identrenador
     *
     * @return integer 
     */
    public function getIdentrenador()
    {
        return $this->identrenador;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Entrenador
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
     * Set cedula
     *
     * @param string $cedula
     * @return Entrenador
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    
        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set disciplina
     *
     * @param string $disciplina
     * @return Entrenador
     */
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;
    
        return $this;
    }

    /**
     * Get disciplina
     *
     * @return string 
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Entrenador
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

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Entrenador
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Entrenador
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}