<?php
namespace model\method\material\vehicle;

use model\method\material\AbstractMaterial;
use interfaces\model\method\action\move\MovingInterface;
use interfaces\model\method\action\move\TargetInterface;
use interfaces\model\data\material\vehicle\VehicleInterface as DataVehicleInterface;
use interfaces\model\method\material\vehicle\VehicleInterface;
use interfaces\model\data\position\PositionInterface;
use interfaces\controller\move\MoveControllerInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractVehicle extends AbstractMaterial implements VehicleInterface
{   
    /**
     * @var DataVehicleInterface
     */
    protected $origin;
    
    /**
     * @var MoveControllerInterface
     */
    protected $moveController;

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
    
    /**
     * @return MovingInterface
     */
    public function getMovingElement(): MovingInterface
    {
        return $this->moveController->getMovingElement();
    }

    /**
     * @param TargetInterface $target
     */
    public function moveTo(TargetInterface $target): void
    {
        $this->moveController->moveTo($target);   
    }
}
