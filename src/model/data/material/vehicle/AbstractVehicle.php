<?php
namespace model\data\material\vehicle;

use model\data\material\AbstractMaterialModel;
use interfaces\model\data\material\vehicle\VehicleInterface;
use interfaces\model\data\position\PositionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractVehicle extends AbstractMaterialModel implements VehicleInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\move\MovingInterface::setPosition()
     */
    public function setPosition(PositionInterface $position): void
    {
        $this->position = $position;
    }
}

