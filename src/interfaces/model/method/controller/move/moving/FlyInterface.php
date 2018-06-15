<?php
namespace interfaces\model\method\controller\move\moving;

use interfaces\model\data\position\SkyInterface;
use interfaces\model\method\controller\move\target\SkyTargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface FlyInterface extends SkyTargetInterface
{
    public function setPosition(SkyInterface $position):void;
}

