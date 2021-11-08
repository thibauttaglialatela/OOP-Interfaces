<?php

//Car.php
require_once 'Vehicle.php';
require_once 'LightableInterface.interface.php';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGY = [
        'fuel',
        'electric'
    ];

    private string $energy;
    private int $energylevel;

    //Constructeur de la classe Car

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    //Méthodes de la classe

    /**
     * Méthodes switchOn et switchOff
     */

     public function switchOn(): bool
     {
         return true;
     }

     public function switchOff(): bool
     {
         return false;
     }

    /**
     * Start the car
     */

    public function start(): bool
    {
        return true;
    }

    /**
     * GETTERS & setters
     */

    /**
     * Get the value of energy
     */
    public function getEnergy()
    {
        return $this->energy;
    }



    /**
     * Get the value of energylevel
     */
    public function getEnergylevel()
    {
        return $this->energylevel;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */
    public function setEnergy($energy)
    {
        $this->energy = $energy;

        return $this;
    }


    /**
     * Set the value of energylevel
     *
     * @return  self
     */
    public function setEnergylevel(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGY)) {
            $this->energy = $energy;
        }
        return $this;
    }
}
