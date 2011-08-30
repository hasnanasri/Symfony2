<?php

namespace Iloweb\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Iloweb\PortfolioBundle\Entity\Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Iloweb\PortfolioBundle\Entity\ImageRepository")
 */
class Image
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text $titre
     *
     * @ORM\Column(name="titre", type="text")
     */
    private $titre;

    /**
     * @var text $url
     *
     * @ORM\Column(name="url", type="text")
     */
    private $url;
    
    /**
     * @var string $lien_image
     * 
     * @ORM\Column(name="lien_image", type="string", length=255)
     */
    private $lien_image;
    
    /**
     * @var boolean $est_publie
     *
     * @ORM\Column(name="est_publie", type="boolean")
     */
    private $est_publie;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    public function __construct() {
        
    }

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
     * @param text $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return text 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set url
     *
     * @param text $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return text 
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Set lien_image
     * 
     * @param text $lien_image
     */
    public function setLienImage($lien_image)
    {
        $this->lien_image = $lien_image;
    }
    
    /**
     * Get lien_image
     * 
     * @return text
     */
    public function getLienImage()
    {
        return $this->lien_image;
    }

    /**
     * Set est_publie
     *
     * @param boolean $estPublie
     */
    public function setEstPublie($estPublie)
    {
        $this->est_publie = $estPublie;
    }

    /**
     * Get est_publie
     *
     * @return boolean 
     */
    public function getEstPublie()
    {
        return $this->est_publie;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }
}