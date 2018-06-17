<?php
namespace interfaces\model\method\material\vehicle\plane;

use interfaces\model\data\material\vehicle\plane\PlaneInterface as DataPlaneInterface;
use interfaces\model\method\material\vehicle\VehicleInterface;
use interfaces\controller\move\MoveControllerInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface PlaneInterface extends VehicleInterface, DataPlaneInterface
{
    /**
     * This function is neccessary to allow a plane to change between driving and flying mode. 
     * @param MoveControllerInterface $controller
     */
    public function setMoveController(MoveControllerInterface $controller):void;
}

