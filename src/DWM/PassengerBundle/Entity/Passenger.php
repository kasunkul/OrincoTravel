<?php

namespace DWM\PassengerBundle\Entity;

/**
 * Passenger
 */
class Passenger
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $voucherno;

    /**
     * @var string
     */
    private $initials;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $depart;

    /**
     * @var string
     */
    private $arrive;

    /**
     * @var string
     */
    private $date;

    /**
     * @var string
     */
    private $airline;

    /**
     * @var int
     */
    private $flightno;

    /**
     * @var string
     */
    private $class;

    /**
     * @var string
     */
    private $status;

    /**
     * @var float
     */
    private $fare;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set voucherno
     *
     * @param integer $voucherno
     *
     * @return Passenger
     */
    public function setVoucherno($voucherno)
    {
        $this->voucherno = $voucherno;

        return $this;
    }

    /**
     * Get voucherno
     *
     * @return int
     */
    public function getVoucherno()
    {
        return $this->voucherno;
    }

    /**
     * Set initials
     *
     * @param string $initials
     *
     * @return Passenger
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;

        return $this;
    }

    /**
     * Get initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Passenger
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
     * Set depart
     *
     * @param string $depart
     *
     * @return Passenger
     */
    public function setDepart($depart)
    {
        $this->depart = $depart;

        return $this;
    }

    /**
     * Get depart
     *
     * @return string
     */
    public function getDepart()
    {
        return $this->depart;
    }

    /**
     * Set arrive
     *
     * @param string $arrive
     *
     * @return Passenger
     */
    public function setArrive($arrive)
    {
        $this->arrive = $arrive;

        return $this;
    }

    /**
     * Get arrive
     *
     * @return string
     */
    public function getArrive()
    {
        return $this->arrive;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Passenger
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set airline
     *
     * @param string $airline
     *
     * @return Passenger
     */
    public function setAirline($airline)
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * Get airline
     *
     * @return string
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Set flightno
     *
     * @param integer $flightno
     *
     * @return Passenger
     */
    public function setFlightno($flightno)
    {
        $this->flightno = $flightno;

        return $this;
    }

    /**
     * Get flightno
     *
     * @return int
     */
    public function getFlightno()
    {
        return $this->flightno;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return Passenger
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Passenger
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set fare
     *
     * @param float $fare
     *
     * @return Passenger
     */
    public function setFare($fare)
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * Get fare
     *
     * @return float
     */
    public function getFare()
    {
        return $this->fare;
    }
}

