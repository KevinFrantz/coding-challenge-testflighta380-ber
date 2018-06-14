<?php
namespace models\vehicles;

use models\AbstractVehicle;
use interfaces\models\positions\SkyInterface;
use interfaces\models\vehicles\PlaneInterface;
use models\collections\PassengerCollection;

abstract class AbstractPlane extends AbstractVehicle implements PlaneInterface
{
    private $passengers;
    
    public function getPosition(): SkyInterface
    {
        return $this->position;
    }
    public function setPosition(SkyInterface $position): void
    {
        $this->position = $position;
    }
    
    public function setPassengers(PassengerCollection $passengers):void{
        $this->passengers= $passengers;
    }
    
    public function getPassengers():PassengerCollection{
        return $this->passengers;
    }
}

