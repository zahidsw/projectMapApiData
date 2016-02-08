<?php

namespace ApiMaps\ApiMapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mappaths
 * 
 * @ORM\Table(name="mappaths", indexes={@ORM\Index(name="idx_45b7519fa3995845", columns={"ref_unitids1"}), @ORM\Index(name="idx_45b7519f3a9009ff", columns={"ref_unitids2"})})
 * @ORM\Entity
 */
class Mappaths
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mappaths_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="normalvalue", type="smallint", nullable=true)
     */
    private $normalvalue;

    /**
     * @var \Unitids
     *
     * @ORM\ManyToOne(targetEntity="Unitids")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_unitids2", referencedColumnName="id")
     * })
     */
    private $refUnitids2;

    /**
     * @var \Unitids
     *
     * @ORM\ManyToOne(targetEntity="Unitids")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_unitids1", referencedColumnName="id")
     * })
     */
    private $refUnitids1;



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
     * Set normalvalue
     *
     * @param integer $normalvalue
     *
     * @return Mappaths
     */
    public function setNormalvalue($normalvalue)
    {
        $this->normalvalue = $normalvalue;

        return $this;
    }

    /**
     * Get normalvalue
     *
     * @return integer
     */
    public function getNormalvalue()
    {
        return $this->normalvalue;
    }

    /**
     * Set refUnitids2
     *
     * @param \ApiMaps\ApiMapBundle\Entity\Unitids $refUnitids2
     *
     * @return Mappaths
     */
    public function setRefUnitids2(\ApiMaps\ApiMapBundle\Entity\Unitids $refUnitids2 = null)
    {
        $this->refUnitids2 = $refUnitids2;

        return $this;
    }

    /**
     * Get refUnitids2
     *
     * @return \ApiMaps\ApiMapBundle\Entity\Unitids
     */
    public function getRefUnitids2()
    {
        return $this->refUnitids2;
    }

    /**
     * Set refUnitids1
     *
     * @param \ApiMaps\ApiMapBundle\Entity\Unitids $refUnitids1
     *
     * @return Mappaths
     */
    public function setRefUnitids1(\ApiMaps\ApiMapBundle\Entity\Unitids $refUnitids1 = null)
    {
        $this->refUnitids1 = $refUnitids1;

        return $this;
    }

    /**
     * Get refUnitids1
     *
     * @return \ApiMaps\ApiMapBundle\Entity\Unitids
     */
    public function getRefUnitids1()
    {
        return $this->refUnitids1;
    }
}
