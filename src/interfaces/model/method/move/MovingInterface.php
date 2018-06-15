<?php
namespace interfaces\model\method\move;

use model\data\position\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MovingInterface
{
    public function setMovingPosition(Geo $position):void;
    
    public function getMovingPosition() :Geo;
}

