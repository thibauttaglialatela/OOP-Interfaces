<?php
require_once 'Vehicle.php';

class Truck extends Vehicle implements LightableInterface
{
    //specific properties

    private int $stockageCapacity;
    private int $loading = 0;

    //constructeur de la classe

    public function __construct(string $color, int $nbSeats, string $energy, int $stockageCapacity)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->stockageCapacity = $stockageCapacity;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    /**
     * Get the value of stockageCapacity
     */ 
    public function getStockageCapacity()
    {
        return $this->stockageCapacity;
    }

    /**
     * Set the value of stockageCapacity
     *
     * @return  self
     */ 
    public function setStockageCapacity($stockageCapacity)
    {
        $this->stockageCapacity = $stockageCapacity;

        return $this;
    }

    /**
     * Get the value of loading
     */ 
    public function getLoading()
    {
        return $this->loading;
    }

    /**
     * Set the value of loading
     *
     * @return  self
     */ 
    public function setLoading($loading)
    {
        $this->loading = $loading;

        return $this;
    }

    public function isLoaded(int $loading, int $stockageCapacity): string
    {
        if ($loading < $stockageCapacity) {
            return "in filling" . "<br>";
        } else {
            return 'full' . '<br>';
        }
    }
}