<?php

namespace ApiMaps\ApiMapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Logindata
 *
 * @ORM\Table(name="logindata", uniqueConstraints={@ORM\UniqueConstraint(name="logindata_sid_key", columns={"sid"})})
 * @ORM\Entity
 */
class Logindata
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="logindata_sid_seq", allocationSize=1, initialValue=1)
     */
    private $sid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="passward", type="text", nullable=true)
     */
    private $passward;



    /**
     * Get sid
     *
     * @return integer
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Logindata
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
     * Set passward
     *
     * @param string $passward
     *
     * @return Logindata
     */
    public function setPassward($passward)
    {
        $this->passward = $passward;

        return $this;
    }

    /**
     * Get passward
     *
     * @return string
     */
    public function getPassward()
    {
        return $this->passward;
    }
}
