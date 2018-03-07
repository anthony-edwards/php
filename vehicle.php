<?php
/**
 * Vehicle class which can be extended to create any type of
 * vehicle we need, this can be a car, bike, boat etc.
 * @author Anthony Edwards <aedwards2788@gmail.com
 */
abstract class vehicle {
    protected $wheels;
    protected $speed;

    public function __construct(){
        $this->wheels = 0;
        $this->speed = 0;
        $this->color = '';
    }

    protected function speedUp(){
        $this->speed += 1;
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function getColor(){
        return $this->color;
    }

    protected function applyBreaks(){
        $this->speed = ($this->speed > 0) ? $this->speed - 1 : 0;
    }
}
