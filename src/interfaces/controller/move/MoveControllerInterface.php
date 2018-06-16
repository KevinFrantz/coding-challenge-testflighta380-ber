<?php
namespace interfaces\controller\move;

use interfaces\controller\ControllerInterface;
use interfaces\model\method\action\move\TargetInterface;
use interfaces\model\method\action\move\MovingInterface;

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

