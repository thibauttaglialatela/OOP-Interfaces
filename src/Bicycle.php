<?php
// Bicycle.php

require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * implémentation de switchOn et switchOff
     */

    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}
