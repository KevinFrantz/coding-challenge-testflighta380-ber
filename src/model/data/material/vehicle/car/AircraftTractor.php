<?php
namespace model\data\material\vehicle\car;

use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AircraftTractor extends AbstractCar implements AircraftTractorInterface
{
    /**
     * @var PlaneInterface
     */
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

