<?php

namespace Annuaire\RestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Restaurant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Annuaire\RestoBundle\Entity\RestaurantRepository")
 */
class Restaurant
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
     private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="article", type="text")
     */
    private $article;

     /**
     * @ORM\OneToOne(targetEntity="Annuaire\RestoBundle\Entity\Image",cascade={"persist"})
     */
     private $image;
	

    /**
     * @var DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

	
	function __construct(){
		$this->date= new \DateTime();
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
     * Set nom
     *
     * @param string $nom
     * @return Restaurant
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
     * Set ville
     *
     * @param string $ville
     * @return Restaurant
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getville()
    {
        return $this->ville;
    }
	

    /**
     * Set article
     *
     * @param string $article
     * @return Restaurant
     */
    public function setArticle($article)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return string 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Restaurant
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Restaurant
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
}