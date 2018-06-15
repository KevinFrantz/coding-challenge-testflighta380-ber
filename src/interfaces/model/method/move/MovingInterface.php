<?php
namespace interfaces\model\method\move;

use model\data\position\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MovingInterface extends TargetInterface
{
    public function setMovingObjectPosition(Geo $position):void;
}

