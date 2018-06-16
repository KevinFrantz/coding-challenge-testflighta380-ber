<?php
namespace interfaces\model\method\move;

use interfaces\model\data\position\PositionInterface;

/**
 * This interface allows to get the position of an object
 * @author kevinfrantz
 *        
 */
interface TargetInterface
{
    public function getPosition() :PositionInterface;
}

