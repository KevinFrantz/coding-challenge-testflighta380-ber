<?php
namespace interfaces\model\method\move;

use model\data\position\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TargetInterface
{
    public function getMovingObjectPosition() :Geo;
}

