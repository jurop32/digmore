<?php

namespace Digmore\DeviceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Device
 *
 * @ORM\Table(name="device")
 * @ORM\Entity
 */
class Device
{
    /**
     * @var integer
     *
     * @ORM\Column(name="miner_id", type="integer", nullable=false)
     */
    private $minerId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="intensity", type="integer", nullable=true)
     */
    private $intensity;

    /**
     * @var integer
     *
     * @ORM\Column(name="gap", type="integer", nullable=false)
     */
    private $gap;

    /**
     * @var integer
     *
     * @ORM\Column(name="wsize", type="integer", nullable=false)
     */
    private $wsize;

    /**
     * @var integer
     *
     * @ORM\Column(name="vectors", type="integer", nullable=false)
     */
    private $vectors;

    /**
     * @var integer
     *
     * @ORM\Column(name="tc", type="integer", nullable=false)
     */
    private $tc;

    /**
     * @var integer
     *
     * @ORM\Column(name="shaders", type="integer", nullable=false)
     */
    private $shaders;

    /**
     * @var integer
     *
     * @ORM\Column(name="freq_device", type="integer", nullable=true)
     */
    private $freqDevice;

    /**
     * @var integer
     *
     * @ORM\Column(name="freq_memory", type="integer", nullable=true)
     */
    private $freqMemory;

    /**
     * @var integer
     *
     * @ORM\Column(name="powertune", type="integer", nullable=false)
     */
    private $powertune;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_cut", type="integer", nullable=true)
     */
    private $tempCut;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_max", type="integer", nullable=true)
     */
    private $tempMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_min", type="integer", nullable=true)
     */
    private $tempMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="fan_min", type="integer", nullable=true)
     */
    private $fanMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="fan_max", type="integer", nullable=true)
     */
    private $fanMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="threads", type="integer", nullable=false)
     */
    private $threads;

    /**
     * @var boolean
     *
     * @ORM\Column(name="new", type="boolean", nullable=true)
     */
    private $new;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set minerId
     *
     * @param integer $minerId
     * @return Device
     */
    public function setMinerId($minerId)
    {
        $this->minerId = $minerId;

        return $this;
    }

    /**
     * Get minerId
     *
     * @return integer 
     */
    public function getMinerId()
    {
        return $this->minerId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Device
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set intensity
     *
     * @param integer $intensity
     * @return Device
     */
    public function setIntensity($intensity)
    {
        $this->intensity = $intensity;

        return $this;
    }

    /**
     * Get intensity
     *
     * @return integer 
     */
    public function getIntensity()
    {
        return $this->intensity;
    }

    /**
     * Set gap
     *
     * @param integer $gap
     * @return Device
     */
    public function setGap($gap)
    {
        $this->gap = $gap;

        return $this;
    }

    /**
     * Get gap
     *
     * @return integer 
     */
    public function getGap()
    {
        return $this->gap;
    }

    /**
     * Set wsize
     *
     * @param integer $wsize
     * @return Device
     */
    public function setWsize($wsize)
    {
        $this->wsize = $wsize;

        return $this;
    }

    /**
     * Get wsize
     *
     * @return integer 
     */
    public function getWsize()
    {
        return $this->wsize;
    }

    /**
     * Set vectors
     *
     * @param integer $vectors
     * @return Device
     */
    public function setVectors($vectors)
    {
        $this->vectors = $vectors;

        return $this;
    }

    /**
     * Get vectors
     *
     * @return integer 
     */
    public function getVectors()
    {
        return $this->vectors;
    }

    /**
     * Set tc
     *
     * @param integer $tc
     * @return Device
     */
    public function setTc($tc)
    {
        $this->tc = $tc;

        return $this;
    }

    /**
     * Get tc
     *
     * @return integer 
     */
    public function getTc()
    {
        return $this->tc;
    }

    /**
     * Set shaders
     *
     * @param integer $shaders
     * @return Device
     */
    public function setShaders($shaders)
    {
        $this->shaders = $shaders;

        return $this;
    }

    /**
     * Get shaders
     *
     * @return integer 
     */
    public function getShaders()
    {
        return $this->shaders;
    }

    /**
     * Set freqDevice
     *
     * @param integer $freqDevice
     * @return Device
     */
    public function setFreqDevice($freqDevice)
    {
        $this->freqDevice = $freqDevice;

        return $this;
    }

    /**
     * Get freqDevice
     *
     * @return integer 
     */
    public function getFreqDevice()
    {
        return $this->freqDevice;
    }

    /**
     * Set freqMemory
     *
     * @param integer $freqMemory
     * @return Device
     */
    public function setFreqMemory($freqMemory)
    {
        $this->freqMemory = $freqMemory;

        return $this;
    }

    /**
     * Get freqMemory
     *
     * @return integer 
     */
    public function getFreqMemory()
    {
        return $this->freqMemory;
    }

    /**
     * Set powertune
     *
     * @param integer $powertune
     * @return Device
     */
    public function setPowertune($powertune)
    {
        $this->powertune = $powertune;

        return $this;
    }

    /**
     * Get powertune
     *
     * @return integer 
     */
    public function getPowertune()
    {
        return $this->powertune;
    }

    /**
     * Set tempCut
     *
     * @param integer $tempCut
     * @return Device
     */
    public function setTempCut($tempCut)
    {
        $this->tempCut = $tempCut;

        return $this;
    }

    /**
     * Get tempCut
     *
     * @return integer 
     */
    public function getTempCut()
    {
        return $this->tempCut;
    }

    /**
     * Set tempMax
     *
     * @param integer $tempMax
     * @return Device
     */
    public function setTempMax($tempMax)
    {
        $this->tempMax = $tempMax;

        return $this;
    }

    /**
     * Get tempMax
     *
     * @return integer 
     */
    public function getTempMax()
    {
        return $this->tempMax;
    }

    /**
     * Set tempMin
     *
     * @param integer $tempMin
     * @return Device
     */
    public function setTempMin($tempMin)
    {
        $this->tempMin = $tempMin;

        return $this;
    }

    /**
     * Get tempMin
     *
     * @return integer 
     */
    public function getTempMin()
    {
        return $this->tempMin;
    }

    /**
     * Set fanMin
     *
     * @param integer $fanMin
     * @return Device
     */
    public function setFanMin($fanMin)
    {
        $this->fanMin = $fanMin;

        return $this;
    }

    /**
     * Get fanMin
     *
     * @return integer 
     */
    public function getFanMin()
    {
        return $this->fanMin;
    }

    /**
     * Set fanMax
     *
     * @param integer $fanMax
     * @return Device
     */
    public function setFanMax($fanMax)
    {
        $this->fanMax = $fanMax;

        return $this;
    }

    /**
     * Get fanMax
     *
     * @return integer 
     */
    public function getFanMax()
    {
        return $this->fanMax;
    }

    /**
     * Set threads
     *
     * @param integer $threads
     * @return Device
     */
    public function setThreads($threads)
    {
        $this->threads = $threads;

        return $this;
    }

    /**
     * Get threads
     *
     * @return integer 
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * Set new
     *
     * @param boolean $new
     * @return Device
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return boolean 
     */
    public function getNew()
    {
        return $this->new;
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
}
