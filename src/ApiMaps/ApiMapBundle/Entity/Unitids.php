<?php

namespace ApiMaps\ApiMapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unitids
 *
 * @ORM\Table(name="unitids", uniqueConstraints={@ORM\UniqueConstraint(name="unique", columns={"databaseid"})})
 * @ORM\Entity
 */
class Unitids
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="unitids_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="unitid", type="integer", nullable=false)
     */
    private $unitid;

    /**
     * @var integer
     *
     * @ORM\Column(name="databaseid", type="integer", nullable=false)
     */
    private $databaseid;

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
     * Set unitid
     *
     * @param integer $unitid
     *
     * @return Unitids
     */
    public function setUnitid($unitid)
    {
        $this->unitid = $unitid;

        return $this;
    }

    /**
     * Get unitid
     *
     * @return integer
     */
    public function getUnitid()
    {
        return $this->unitid;
    }

    /**
     * Set databaseid
     *
     * @param integer $databaseid
     *
     * @return Unitids
     */
    public function setDatabaseid($databaseid)
    {
        $this->databaseid = $databaseid;

        return $this;
    }

    /**
     * Get databaseid
     *
     * @return integer
     */
    public function getDatabaseid()
    {
        return $this->databaseid;
    }
}
