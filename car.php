<?php

// car.php
class Car
{
    /**
     * @var string
     */
    private $color;
    /**
     * @var integer
     */
    public $currentSpeed = 0;
    /**
     * @var integer
     */
    public $nbSeats = 1;
    /**
     * @var integer
     */
    public $nbWheels = 2;
    /**
     * @var string
     */
    public $fuelType;
    /**
     * @var integer
     */
    public $fuelLevel;

    public function __construct(string $color, integer $nbSeats, string $fuelType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $fuelType;
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";

        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }

        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string
    {
        $this->currentSpeed = 3; // Car starts to roll forward, like in "real life"

        return "Car started !";
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string // should be getFuelType() but that's life
    {
        return $this->fuelType;
    }

    public function getEnergyLevel(): int // should be getFuelLevel() but that's life
    {
        return $this->fuelLevel;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0)
            $this->currentSpeed = $currentSpeed;
         else
            echo "Invalid input. Accepted range >= 0";
    }
}
