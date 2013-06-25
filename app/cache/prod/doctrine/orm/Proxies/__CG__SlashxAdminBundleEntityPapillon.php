<?php

namespace Proxies\__CG__\Slashx\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Papillon extends \Slashx\AdminBundle\Entity\Papillon implements \Doctrine\ORM\Proxy\Proxy
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

    public function setFamille($famille)
    {
        $this->__load();
        return parent::setFamille($famille);
    }

    public function getFamille()
    {
        $this->__load();
        return parent::getFamille();
    }

    public function setEspece($espece)
    {
        $this->__load();
        return parent::setEspece($espece);
    }

    public function getEspece()
    {
        $this->__load();
        return parent::getEspece();
    }

    public function setSousEspece($sousEspece)
    {
        $this->__load();
        return parent::setSousEspece($sousEspece);
    }

    public function getSousEspece()
    {
        $this->__load();
        return parent::getSousEspece();
    }

    public function setForme($forme)
    {
        $this->__load();
        return parent::setForme($forme);
    }

    public function getForme()
    {
        $this->__load();
        return parent::getForme();
    }

    public function setAuteur($auteur)
    {
        $this->__load();
        return parent::setAuteur($auteur);
    }

    public function getAuteur()
    {
        $this->__load();
        return parent::getAuteur();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setStatut($statut)
    {
        $this->__load();
        return parent::setStatut($statut);
    }

    public function getStatut()
    {
        $this->__load();
        return parent::getStatut();
    }

    public function setDistributions($distributions)
    {
        $this->__load();
        return parent::setDistributions($distributions);
    }

    public function getDistributions()
    {
        $this->__load();
        return parent::getDistributions();
    }

    public function setHabitats($habitats)
    {
        $this->__load();
        return parent::setHabitats($habitats);
    }

    public function getHabitats()
    {
        $this->__load();
        return parent::getHabitats();
    }

    public function setPlantes($plantes)
    {
        $this->__load();
        return parent::setPlantes($plantes);
    }

    public function getPlantes()
    {
        $this->__load();
        return parent::getPlantes();
    }

    public function setPremiersEtats($premiersEtats)
    {
        $this->__load();
        return parent::setPremiersEtats($premiersEtats);
    }

    public function getPremiersEtats()
    {
        $this->__load();
        return parent::getPremiersEtats();
    }

    public function setCouleur($couleur)
    {
        $this->__load();
        return parent::setCouleur($couleur);
    }

    public function getCouleur()
    {
        $this->__load();
        return parent::getCouleur();
    }

    public function addPublication(\Slashx\AdminBundle\Entity\Publication $publications)
    {
        $this->__load();
        return parent::addPublication($publications);
    }

    public function removePublication(\Slashx\AdminBundle\Entity\Publication $publications)
    {
        $this->__load();
        return parent::removePublication($publications);
    }

    public function getPublications()
    {
        $this->__load();
        return parent::getPublications();
    }

    public function addTypage(\Slashx\AdminBundle\Entity\Typage $typages)
    {
        $this->__load();
        return parent::addTypage($typages);
    }

    public function removeTypage(\Slashx\AdminBundle\Entity\Typage $typages)
    {
        $this->__load();
        return parent::removeTypage($typages);
    }

    public function getTypages()
    {
        $this->__load();
        return parent::getTypages();
    }

    public function setAlbum(\Slashx\AdminBundle\Entity\Album $album = NULL)
    {
        $this->__load();
        return parent::setAlbum($album);
    }

    public function getAlbum()
    {
        $this->__load();
        return parent::getAlbum();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'famille', 'espece', 'sousEspece', 'forme', 'auteur', 'date', 'nom', 'statut', 'distributions', 'habitats', 'plantes', 'premiersEtats', 'couleur', 'publications', 'typages', 'album');
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