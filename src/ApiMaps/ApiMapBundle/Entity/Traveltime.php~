<?php

namespace ApiMaps\ApiMapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traveltime
 *
 * @ORM\Table(name="traveltime", indexes={@ORM\Index(name="idx_1bafa00f1e6bea1d", columns={"ref_map_path"})})
 * @ORM\Entity
 */
class Traveltime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="traveltime_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="traveltime", type="smallint", nullable=true)
     */
    private $traveltime;

    /**
     * @var integer
     *
     * @ORM\Column(name="noobjs", type="smallint", nullable=true)
     */
    private $noobjs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ondate", type="datetime", nullable=true)
     */
    private $ondate;

    /**
     * @var \Mappaths
     *
     * @ORM\ManyToOne(targetEntity="Mappaths")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ref_map_path", referencedColumnName="id")
     * })
     */
    private $refMapPath;



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
     * Set traveltime
     *
     * @param integer $traveltime
     *
     * @return Traveltime
     */
    public function setTraveltime($traveltime)
    {
        $this->traveltime = $traveltime;

        return $this;
    }

    /**
     * Get traveltime
     *
     * @return integer
     */
    public function getTraveltime()
    {
        return $this->traveltime;
    }

    /**
     * Set noobjs
     *
     * @param integer $noobjs
     *
     * @return Traveltime
     */
    public function setNoobjs($noobjs)
    {
        $this->noobjs = $noobjs;

        return $this;
    }

    /**
     * Get noobjs
     *
     * @return integer
     */
    public function getNoobjs()
    {
        return $this->noobjs;
    }

    /**
     * Set ondate
     *
     * @param \DateTime $ondate
     *
     * @return Traveltime
     */
    public function setOndate($ondate)
    {
        $this->ondate = $ondate;

        return $this;
    }

    /**
     * Get ondate
     *
     * @return \DateTime
     */
    public function getOndate()
    {
        return $this->ondate;
    }

    /**
     * Set refMapPath
     *
     * @param \ApiMaps\ApiMapBundle\Entity\Mappaths $refMapPath
     *
     * @return Traveltime
     */
    public function setRefMapPath(\ApiMaps\ApiMapBundle\Entity\Mappaths $refMapPath = null)
    {
        $this->refMapPath = $refMapPath;

        return $this;
    }

    /**
     * Get refMapPath
     *
     * @return \ApiMaps\ApiMapBundle\Entity\Mappaths
     */
    public function getRefMapPath()
    {
        return $this->refMapPath;
    }
}
