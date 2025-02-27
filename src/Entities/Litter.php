<?php
namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="litters")
 */
class Litter
{
	/**
    * @ORM\Id
    * @ORM\Column(type="integer", name="id")
    * @ORM\GeneratedValue
    */
    protected $id;	
			
    /**
    * Many Litters have Many Breeders (potentially multiple users).
    * @ORM\ManyToOne(targetEntity="user")
    * @ORM\JoinColumn(name="breeder_id", referencedColumnName="id")	 
     */ 
    protected $breeder;		
	
	/**
    * @ORM\Column(type="string")
    */	
    protected $code;	
	
	/**
    * @ORM\ManyToOne(targetEntity="rat")
    * @ORM\JoinColumn(name="sire_id", referencedColumnName="id")
    */	
    protected $sire;	
	
	/**
    * @ORM\ManyToOne(targetEntity="rat")
    * @ORM\JoinColumn(name="dam_id", referencedColumnName="id")
    */	
    protected $dam;		
	
	 /**
     * One Litter has Many Rats.
     * @ORM\OneToMany(targetEntity="Rat", mappedBy="litter")
     */ 
    protected $rats;	
	
	/**
    * @ORM\Column(name="birth_date", type="date")
    */
    protected $birthDate;		
		

	public function __construct()
    {
		$this->rats = new ArrayCollection();		
	}
	
    public function getId()
    {
        return $this->id;
    }
	
    public function setBreeder($breeder)
    {
        $this->breeder = $breeder;
    }		

    public function getBreeder()
	{
        return $this->breeder;
    }	
	
    public function setCode($code)
    {
        $this->code = $code;
    }	
	
    public function getRats()
    {
        return $this->rats;
    }		
	
	public function resetCode(){

		$datecode = $this->getBirthDate()->format('dmy');
		$damCode = substr($this->getDam()->getName(),0,1);
		$sireCode = substr($this->getSire()->getName(),0,1);		
		$breedercode = $this->getBreeder()->getCode();
		
		$this->setCode($breedercode . $sireCode . $damCode . $datecode);
		
	}

    public function getCode()
    {
        return $this->code;
    }		
	
    public function setDam($dam)
    {
        $this->dam = $dam;
    }		

    public function getDam()
	{
        return $this->dam;
    }	
	
    public function setSire($sire)
    {
        $this->sire = $sire;
    }		

    public function getSire()
	{
        return $this->sire;
    }		
	
    public function getBirthDate()
    {
        return $this->birthDate;
    }	
	
    public function setBirthDate($date)
    {
        $this->birthDate = $date;
    }		
	
}