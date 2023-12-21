<?php

namespace App\Services;

interface Door {
    public function getWidth();
    public function getHeight();
}

class WoodenDoor implements Door {
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}

class DoorFactory {
    public function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
    
}


$factory = new DoorFactory();

$door = $factory->makeDoor(100, 200);



dd($door);