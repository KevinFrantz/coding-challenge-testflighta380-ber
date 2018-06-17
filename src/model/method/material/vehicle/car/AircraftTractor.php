<?php
namespace model\method\material\vehicle\car;

use interfaces\model\method\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AircraftTractor extends Car implements AircraftTractorInterface
{
    /**
     * @var AircraftTractorInterface
     */
    protected $origin;
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\car\AircraftTractorInterface::setPlane()
     */
    public function setPlane(PlaneInterface $plane): void
    {
        $this->origin->setPlane($plane);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\car\AircraftTractorInterface::getPlane()
     */
    public function getPlane(): ?PlaneInterface
    {
        return $this->origin->getPlane();
    }

}

