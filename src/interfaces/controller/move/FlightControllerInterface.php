<?php
namespace interfaces\controller\move;

use interfaces\model\method\controller\move\moving\FlyInterface;
use interfaces\model\method\controller\move\target\SkyTargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface FlightControllerInterface extends MoveControllerInterface
{
    public function __construct(FlyInterface $movingElement);
    
    public function moveTo(SkyTargetInterface $target):void;
    
    public function getMovingElement():FlyInterface;
}

