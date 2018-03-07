<?php
/**
 * Bicycle class which is a type of Vehicle
 * Class utilizes some variables from the parent class and allows user go
 * for a ride.
 * @author Anthony Edwards <aedwards2788@gmail.com
 */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class bicycle extends vehicle{
    protected $gear;
    protected $height;
    protected $details = [];

    public function __construct($wheels, $speed, $gear, $height, $color){
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->gear = $gear;
        $this->height = $height;
        $this->color = $color;
    }

    protected function raiseSeat($height){
        $this->height += $height;
    }

    protected function lowerSeat($height){
        $this->height -= $height;
    }

    public function getGear(){
        return $this->gear;
    }

    protected function setGear($gear){
        return $this->gear = $gear;
    }

    public function getWheels(){
        return $this->wheels;
    }

    public function getSeatHeight(){
        return $this->height;
    }

    public function ride(){
        $this->setGear(3);
        $this->raiseSeat(2);
        $this->lowerSeat(1);
        $this->speedUp();
        $this->speedUp();
        $this->speedUp();
        $this->speedUp();
        $this->speedUp();
        $this->speedUp();
        $this->applyBreaks();
        $this->applyBreaks();
    }

    protected function rideReset(){
        $this->speed = 0;
        $this->gear = 0;
        $this->height = 0;
    }

    public function rideCompleted(){
        $this->rideReset();
    }
}

$bike = new bicycle(2, 0, 0, 0, 'blue');
//Start Bike Ride
$bike->ride();
print " \n " . "Start Bike Ride.... " . " \n " .
"Speed: " . $bike->getSpeed() . " \n " .
"Color: " . $bike->getColor() . " \n " .
"Gear " . $bike->getGear()  . " \n " .
"Height " . $bike->getSeatHeight() . " \n " .
"Wheels " . $bike->getWheels() . " \n ";

//End Bike Ride
$bike->rideCompleted();
print " \n " . "Ride Completed.... " . " \n " .
"Speed: " . $bike->getSpeed() . " \n " .
"Color: " . $bike->getColor() . " \n " .
"Gear " . $bike->getGear()  . " \n " .
"Height " . $bike->getSeatHeight() . " \n " .
"Wheels " . $bike->getWheels() . " \n ";
