<?php

namespace Proxies\__CG__\Slashx\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Album extends \Slashx\AdminBundle\Entity\Album implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function addPhotographie(\Slashx\AdminBundle\Entity\Photographie $photographies)
    {
        $this->__load();
        return parent::addPhotographie($photographies);
    }

    public function removePhotographie(\Slashx\AdminBundle\Entity\Photographie $photographies)
    {
        $this->__load();
        return parent::removePhotographie($photographies);
    }

    public function getPhotographies()
    {
        $this->__load();
        return parent::getPhotographies();
    }

    public function setCategorie($categorie)
    {
        $this->__load();
        return parent::setCategorie($categorie);
    }

    public function getCategorie()
    {
        $this->__load();
        return parent::getCategorie();
    }

    public function setSousCategorie($sousCategorie)
    {
        $this->__load();
        return parent::setSousCategorie($sousCategorie);
    }

    public function getSousCategorie()
    {
        $this->__load();
        return parent::getSousCategorie();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titre', 'categorie', 'sousCategorie', 'photographies');
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