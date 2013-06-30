<?php

namespace Slashx\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Papillon
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Slashx\AdminBundle\Entity\PapillonRepository")
 */
class Papillon
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
     * @ORM\OneToMany(targetEntity="Slashx\AdminBundle\Entity\Publication", mappedBy="papillon", cascade={"remove"})
     */
    private $publications; 
    

    /**
     * @ORM\OneToMany(targetEntity="Slashx\AdminBundle\Entity\Typage", mappedBy="papillon", cascade={"remove"})
     */
    private $typages; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="famille", type="string", length=255)
     */
    private $famille;

    /**
     * @var string
     *
     * @ORM\Column(name="espece", type="string", length=255)
     */
    private $espece;

    /**
     * @var string
     *
     * @ORM\Column(name="sous_espece", type="string", length=255)
     */
    private $sousEspece;

    /**
     * @var string
     *
     * @ORM\Column(name="forme", type="string", length=255)
     */
    private $forme;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var array
     *
     * @ORM\Column(name="distributions", type="array")
     */
    private $distributions;

    /**
     * @var array
     *
     * @ORM\Column(name="habitats", type="array")
     */
    private $habitats;

    /**
     * @var array
     *
     * @ORM\Column(name="plantes", type="array")
     */
    private $plantes;

    /**
     * @var array
     *
     * @ORM\Column(name="premiers_etats", type="array")
     */
    private $premiersEtats;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255)
     */
    private $couleur;

    
    /**
     * @ORM\OneToOne(targetEntity="Slashx\AdminBundle\Entity\Album",cascade={"persist"})
     */
    private $album;

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
     * Set famille
     *
     * @param string $famille
     * @return Papillon
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;
    
        return $this;
    }

    /**
     * Get famille
     *
     * @return string 
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set espece
     *
     * @param string $espece
     * @return Papillon
     */
    public function setEspece($espece)
    {
        $this->espece = $espece;
    
        return $this;
    }

    /**
     * Get espece
     *
     * @return string 
     */
    public function getEspece()
    {
        return $this->espece;
    }

    /**
     * Set sous-espece
     *
     * @param string $sousEspece
     * @return Papillon
     */
    public function setSousEspece($sousEspece)
    {
        $this->sousEspece = $sousEspece;
    
        return $this;
    }

    /**
     * Get sous-espece
     *
     * @return string 
     */
    public function getSousEspece()
    {
        return $this->sousEspece;
    }

    /**
     * Set forme
     *
     * @param string $forme
     * @return Papillon
     */
    public function setForme($forme)
    {
        $this->forme = $forme;
    
        return $this;
    }

    /**
     * Get forme
     *
     * @return string 
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Papillon
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Papillon
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Papillon
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Papillon
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set distributions
     *
     * @param array $distributions
     * @return Papillon
     */
    public function setDistributions($distributions)
    {
        $this->distributions = $distributions;
    
        return $this;
    }

    /**
     * Get distributions
     *
     * @return array 
     */
    public function getDistributions()
    {
        return $this->distributions;
    }

    /**
     * Set habitats
     *
     * @param array $habitats
     * @return Papillon
     */
    public function setHabitats($habitats)
    {
        $this->habitats = $habitats;
    
        return $this;
    }

    /**
     * Get habitats
     *
     * @return array 
     */
    public function getHabitats()
    {
        return $this->habitats;
    }

    /**
     * Set plantes
     *
     * @param array $plantes
     * @return Papillon
     */
    public function setPlantes($plantes)
    {
        $this->plantes = $plantes;
    
        return $this;
    }

    /**
     * Get plantes
     *
     * @return array 
     */
    public function getPlantes()
    {
        return $this->plantes;
    }

    /**
     * Set premiersEtats
     *
     * @param array $premiersEtats
     * @return Papillon
     */
    public function setPremiersEtats($premiersEtats)
    {
        $this->premiersEtats = $premiersEtats;
    
        return $this;
    }

    /**
     * Get premiersEtats
     *
     * @return array 
     */
    public function getPremiersEtats()
    {
        return $this->premiersEtats;
    }

    /**
     * Set couleur
     *
     * @param string $couleur
     * @return Papillon
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    
        return $this;
    }

    /**
     * Get couleur
     *
     * @return string 
     */
    public function getCouleur()
    {
        return $this->couleur;
    }
    

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->publications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->typages = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add publications
     *
     * @param \Slashx\AdminBundle\Entity\Publication $publications
     * @return Papillon
     */
    public function addPublication(\Slashx\AdminBundle\Entity\Publication $publications)
    {
        $this->publications[] = $publications;
    
        return $this;
    }

    /**
     * Remove publications
     *
     * @param \Slashx\AdminBundle\Entity\Publication $publications
     */
    public function removePublication(\Slashx\AdminBundle\Entity\Publication $publications)
    {
        $this->publications->removeElement($publications);
    }

    /**
     * Get publications
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPublications()
    {
        return $this->publications;
    }

    /**
     * Add typages
     *
     * @param \Slashx\AdminBundle\Entity\Typage $typages
     * @return Papillon
     */
    public function addTypage(\Slashx\AdminBundle\Entity\Typage $typages)
    {
        $this->typages[] = $typages;
    
        return $this;
    }

    /**
     * Remove typages
     *
     * @param \Slashx\AdminBundle\Entity\Typage $typages
     */
    public function removeTypage(\Slashx\AdminBundle\Entity\Typage $typages)
    {
        $this->typages->removeElement($typages);
    }

    /**
     * Get typages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypages()
    {
        return $this->typages;
    }

    /**
     * Set album
     *
     * @param \Slashx\AdminBundle\Entity\Album $album
     * @return Papillon
     */
    public function setAlbum(\Slashx\AdminBundle\Entity\Album $album = null)
    {
        $this->album = $album;
    
        return $this;
    }

    /**
     * Get album
     *
     * @return \Slashx\AdminBundle\Entity\Album 
     */
    public function getAlbum()
    {
        return $this->album;
    }
}