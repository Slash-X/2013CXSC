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
     * @ORM\OneToOne(targetEntity="Slashx\AdminBundle\Entity\Papillon", cascade={"persist"})
     */
    private $papillon;
    
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
     * Set papillon
     *
     * @param \Slashx\AdminBundle\Entity\Papillon $papillon
     * @return Album
     */
    public function setPapillon(\Slashx\AdminBundle\Entity\Papillon $papillon = null)
    {
        $this->papillon = $papillon;
    
        return $this;
    }

    /**
     * Get papillon
     *
     * @return \Slashx\AdminBundle\Entity\Papillon 
     */
    public function getPapillon()
    {
        return $this->papillon;
    }
}