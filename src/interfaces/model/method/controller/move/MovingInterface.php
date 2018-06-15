<?php
namespace interfaces\model\method\controller\move;

use interfaces\model\data\position\PositionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MovingInterface extends TargetInterface
{
    public function setPosition(PositionInterface $position):void;
}
