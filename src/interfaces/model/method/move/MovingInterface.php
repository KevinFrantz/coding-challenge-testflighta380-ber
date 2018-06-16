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
    public function setPosition(AbstractPosition $position):void;
    
    public function getPosition() :AbstractPosition;
}

