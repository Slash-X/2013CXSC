<?php

namespace Slashx\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Slashx\AdminBundle\Entity\AlbumRepository")
 */
class Album
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255,nullable=true)
     */
    private $categorie;
    
    /**
     * @var string
     *
     * @ORM\Column(name="sousCategorie", type="string", length=255,nullable=true)
     */
    private $sousCategorie;


    
    
    /**
     * @ORM\OneToMany(targetEntity="Slashx\AdminBundle\Entity\Photographie", mappedBy="album", cascade={"remove"})
     */
    private $photographies;
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Album
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photographies = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add photographies
     *
     * @param \Slashx\AdminBundle\Entity\Photographie $photographies
     * @return Album
     */
    public function addPhotographie(\Slashx\AdminBundle\Entity\Photographie $photographies)
    {
        $this->photographies[] = $photographies;
    
        return $this;
    }

    /**
     * Remove photographies
     *
     * @param \Slashx\AdminBundle\Entity\Photographie $photographies
     */
    public function removePhotographie(\Slashx\AdminBundle\Entity\Photographie $photographies)
    {
        $this->photographies->removeElement($photographies);
    }

    /**
     * Get photographies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPhotographies()
    {
        return $this->photographies;
    }


    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Album
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set sousCategorie
     *
     * @param string $sousCategorie
     * @return Album
     */
    public function setSousCategorie($sousCategorie)
    {
        $this->sousCategorie = $sousCategorie;
    
        return $this;
    }

    /**
     * Get sousCategorie
     *
     * @return string 
     */
    public function getSousCategorie()
    {
        return $this->sousCategorie;
    }
}