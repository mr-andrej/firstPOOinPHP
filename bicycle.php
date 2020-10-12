<?php

// bicycle.php
class Bicycle
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
     * @var boolean
     */
    public $hasLuggageRack = false;

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

}
