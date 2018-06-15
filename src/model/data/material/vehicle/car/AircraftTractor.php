<?php
namespace model\data\material\vehicle\car;

use interfaces\model\data\material\vehicle\PlaneInterface;
use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
final class AircraftTractor extends AbstractCar implements AircraftTractorInterface
{
    private $plane;
    
    public function setPlane(PlaneInterface $plane): void
    {
        $this->plane = $plane;   
    }

    public function getPlane(): ?PlaneInterface
    {
        return $this->plane;
    }

}

