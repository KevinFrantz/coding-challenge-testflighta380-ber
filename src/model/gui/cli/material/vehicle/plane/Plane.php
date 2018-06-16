<?php
namespace model\gui\cli\material\vehicle\plane;

use model\data\collection\PassengerCollection;
use model\gui\cli\material\vehicle\AbstractVehicle;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Plane extends AbstractVehicle implements PlaneInterface
{
    public function getPassengers(): PassengerCollection
    {
        return $this->origin->getPassengers();
    }

    public function setPassengers(PassengerCollection $passengers): void
    {
        $this->origin->setPassengers($passengers);
    }
}

