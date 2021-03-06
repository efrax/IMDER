<?php

namespace Proxies\__CG__\Proyecto\PrincipalBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Entrenador extends \Proyecto\PrincipalBundle\Entity\Entrenador implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getIdentrenador()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["identrenador"];
        }
        $this->__load();
        return parent::getIdentrenador();
    }

    public function setNombre($nombre)
    {
        $this->__load();
        return parent::setNombre($nombre);
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function setCedula($cedula)
    {
        $this->__load();
        return parent::setCedula($cedula);
    }

    public function getCedula()
    {
        $this->__load();
        return parent::getCedula();
    }

    public function setDisciplina($disciplina)
    {
        $this->__load();
        return parent::setDisciplina($disciplina);
    }

    public function getDisciplina()
    {
        $this->__load();
        return parent::getDisciplina();
    }

    public function setDireccion($direccion)
    {
        $this->__load();
        return parent::setDireccion($direccion);
    }

    public function getDireccion()
    {
        $this->__load();
        return parent::getDireccion();
    }

    public function setTelefono($telefono)
    {
        $this->__load();
        return parent::setTelefono($telefono);
    }

    public function getTelefono()
    {
        $this->__load();
        return parent::getTelefono();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'identrenador', 'nombre', 'cedula', 'disciplina', 'direccion', 'telefono', 'email');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}