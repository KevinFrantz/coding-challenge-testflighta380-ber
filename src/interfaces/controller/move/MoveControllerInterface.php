<?php
namespace interfaces\controller\move;

use interfaces\controller\ControllerInterface;
use interfaces\model\data\position\GeoInterface;
use interfaces\model\method\move\TargetInterface;
use interfaces\model\method\move\MovingInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MoveControllerInterface extends ControllerInterface
{

    public function moveTo(TargetInterface $target):void;

    public function getMovingElement():MovingInterface;
}

