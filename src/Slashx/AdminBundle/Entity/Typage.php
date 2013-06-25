<?php

namespace Slashx\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Typage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Slashx\AdminBundle\Entity\TypageRepository")
 */
class Typage
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
     * @ORM\ManyToOne(targetEntity="Slashx\AdminBundle\Entity\Papillon")
     * @ORM\JoinColumn(nullable=false)
     */
    private $papillon;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_conservation", type="string", length=255)
     */
    private $lieuConservation;

    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=255)
     */
    private $localite;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;
    
    
   /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;
    
    
    /**
     * @Assert\File(maxSize="1M",mimeTypes={"image/png", "image/jpeg", "image/gif"})
     */
    public $file;

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
     * Set lieuConservation
     *
     * @param string $lieuConservation
     * @return Typage
     */
    public function setLieuConservation($lieuConservation)
    {
        $this->lieuConservation = $lieuConservation;
    
        return $this;
    }

    /**
     * Get lieuConservation
     *
     * @return string 
     */
    public function getLieuConservation()
    {
        return $this->lieuConservation;
    }

    /**
     * Set localite
     *
     * @param string $localite
     * @return Typage
     */
    public function setLocalite($localite)
    {
        $this->localite = $localite;
    
        return $this;
    }

    /**
     * Get localite
     *
     * @return string 
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Typage
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
     * Set sexe
     *
     * @param string $sexe
     * @return Typage
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set papillon
     *
     * @param \Slashx\AdminBundle\Entity\Papillon $papillon
     * @return Typage
     */
    public function setPapillon(\Slashx\AdminBundle\Entity\Papillon $papillon)
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
    
    

    /**
     * Set path
     *
     * @param string $path
     * @return Typage
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Typage
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }
    
   
    
    public function getWebPath()
    {
    	return null === $this->picture ? null : $this->getUploadDir().'/'.$this->picture;
    }
    
    protected function getUploadRootDir()
    {
    	// le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
    	return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    protected function getUploadDir()
    {
    	// get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
    	return 'uploads/pictures';
    }
    
    public function uploadProfilePicture()
    {
    	
    	
    	// Nous utilisons le nom de fichier original, donc il est dans la pratique
    	// nécessaire de le nettoyer pour éviter les problèmes de sécurité
     
    	// move copie le fichier présent chez le client dans le répertoire indiqué.
    	$this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
    
    	// On sauvegarde le nom de fichier
    	$this->picture = $this->file->getClientOriginalName();
    
    	// La propriété file ne servira plus
    	$this->file = null;
    }
}