<?php
namespace interfaces\model\method\move;

use interfaces\model\data\position\PositionInterface;

/**
 * This Interface allows to move Objects.
 * Therefore you need to know where it is, so it extends TargetInterface
 * @author kevinfrantz
 *        
 */
interface MovingInterface extends TargetInterface
{
    public function setPosition(PositionInterface $position):void;
}

