<?php
namespace interfaces\model\method\controller\move\moving;

use interfaces\model\data\position\GeoInterface;
use interfaces\model\method\controller\move\target\GeoTargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GeoMovingInterface extends MovingInterface,GeoTargetInterface
{
    public function setPosition(GeoInterface $position):void;
}

