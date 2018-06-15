<?php
namespace interfaces\controller\move;

use interfaces\controller\ControllerInterface;
use interfaces\model\method\controller\move\MovingInterface;
use interfaces\model\method\controller\move\TargetInterface;

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

