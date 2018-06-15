<?php
namespace interfaces\controller\move;

use interfaces\controller\ControllerInterface;
use interfaces\model\method\controller\move\moving\MovingInterface;
use interfaces\model\method\controller\move\target\TargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MoveControllerInterface extends ControllerInterface
{

    public function moveTo(TargetInterface $target): void;

    public function getMovingElement(): MovingInterface;
}

