<?php
namespace interfaces\model\method\move;

use model\data\position\AbstractPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MovingInterface
{
    public function setMovingPosition(AbstractPosition $position):void;
    
    public function getMovingPosition() :AbstractPosition;
}

