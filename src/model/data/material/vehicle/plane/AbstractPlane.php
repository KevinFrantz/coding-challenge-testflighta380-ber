<?php
namespace model\data\material\vehicle\plane;

use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use model\data\collection\PassengerCollection;
use model\data\material\vehicle\AbstractVehicle;

abstract class AbstractPlane extends AbstractVehicle implements PlaneInterface
{
    /**
     * @var PassengerCollection
     */
    private $passengers;
    
    public function setPassengers(PassengerCollection $passengers):void{
        $this->passengers= $passengers;
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\plane\PlaneInterface::getPassengers()
     */
    public function getPassengers():PassengerCollection{
        return $this->passengers;
    }
}

