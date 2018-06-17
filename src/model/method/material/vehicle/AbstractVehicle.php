<?php
namespace model\method\material\vehicle;

use model\method\material\AbstractMaterial;
use interfaces\model\method\material\vehicle\VehicleInterface;
use interfaces\model\data\position\PositionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractVehicle extends AbstractMaterial implements VehicleInterface
{
    /**
     * @var VehicleInterface
     */
    protected $origin;

    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\action\move\MovingInterface::getPosition()
     */
    public function getPosition():PositionInterface
    {
        return $this->origin->getPosition();
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\action\move\MovingInterface::setPosition()
     */
    public function setPosition(PositionInterface $position):void
    {
        $this->origin->setPosition($position);
    }
}
