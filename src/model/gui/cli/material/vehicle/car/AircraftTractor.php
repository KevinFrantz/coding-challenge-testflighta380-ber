<?php
namespace model\gui\cli\material\vehicle\car;

use model\data\material\vehicle\AbstractVehicle;
use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AircraftTractor extends AbstractVehicle implements AircraftTractorInterface
{
    public function setPlane(PlaneInterface $plane): void
    {
       
    }

    public function getPlane(): ?PlaneInterface
    {
        
    }
}

