<?php
namespace model\method\material\vehicle;

use model\method\material\AbstractMaterial;
use interfaces\model\method\move\MovingInterface;
use interfaces\model\data\material\vehicle\VehicleInterface;
use model\data\position\AbstractPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractVehicle extends AbstractMaterial implements MovingInterface,VehicleInterface
{
    /**
     * @var VehicleInterface
     */
    protected $origin;

    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\move\MovingInterface::getPosition()
     */
    public function getPosition(): AbstractPosition
    {
        return $this->origin->getPosition();
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\move\MovingInterface::setPosition()
     */
    public function setPosition(AbstractPosition $position): void
    {
        $this->origin->setPosition($position);
    }
}
