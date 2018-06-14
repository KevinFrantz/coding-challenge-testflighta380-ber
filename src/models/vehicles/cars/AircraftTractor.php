<?php
namespace models\vehicles\cars;

use models\vehicles\AbstractCar;
use interfaces\models\vehicles\PlaneInterface;
use interfaces\models\vehicles\cars\AircraftTractorInterface;

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
        $this->setPlane($plane);   
    }

    public function getPlane(): ?PlaneInterface
    {
        return $this->getPlane();
    }

}

