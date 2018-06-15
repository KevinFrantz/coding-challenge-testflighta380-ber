<?php
namespace model\data\material\vehicle\plane;

use interfaces\model\data\position\SkyInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use model\data\collection\PassengerCollection;
use model\data\material\vehicle\AbstractVehicle;

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

