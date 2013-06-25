<?php

namespace Slashx\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Photographie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Slashx\AdminBundle\Entity\PhotographieRepository")
 */
class Photographie
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
     * @ORM\Column(name="Photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Ordre", type="string", length=255)
     */
    private $ordre;

    
    /**
     * @ORM\ManyToOne(targetEntity="Slashx\AdminBundle\Entity\Album")
     * @ORM\JoinColumn(nullable=false)
     */
    private $album;
    
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
     * Set photo
     *
     * @param string $photo
     * @return Photographie
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return Photographie
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set ordre
     *
     * @param string $ordre
     * @return Photographie
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    
        return $this;
    }

    /**
     * Get ordre
     *
     * @return string 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set album
     *
     * @param \Slashx\AdminBundle\Entity\Album $album
     * @return Photographie
     */
    public function setAlbum(\Slashx\AdminBundle\Entity\Album $album)
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
    
    

    public function getWebPath()
    {
    	return null === $this->photo ? null : $this->getUploadDir().'/'.$this->photo;
    }
    
    protected function getUploadRootDir()
    {
    	// le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
    	return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    protected function getUploadDir()
    {
    	// get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
    	return 'uploads/photos';
    }
    
    public function uploadProfilePicture()
    {
    	 
    	 
    	// Nous utilisons le nom de fichier original, donc il est dans la pratique
    	// nécessaire de le nettoyer pour éviter les problèmes de sécurité
    	 
    	// move copie le fichier présent chez le client dans le répertoire indiqué.
    	$this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
    
    	// On sauvegarde le nom de fichier
    	$this->photo = $this->file->getClientOriginalName();
    
    	// La propriété file ne servira plus
    	$this->file = null;
    }
}