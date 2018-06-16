<?php
namespace model\gui\cli\material\vehicle;

use model\gui\cli\material\AbstractMaterial;
use interfaces\model\data\material\vehicle\VehicleInterface;
use interfaces\model\data\position\PositionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractVehicle extends AbstractMaterial implements VehicleInterface
{
    /**
     * @param PositionInterface $position
     */
    public function setPosition(PositionInterface $position): void
    {
        $this->repository->addOutput('Set Position for '.$this->origin->getName().'.');
        return $this->origin->getPosition();
    }
}

