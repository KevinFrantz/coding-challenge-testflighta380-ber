<?php
namespace interfaces\model\method\controller\move;

use interfaces\model\data\position\PositionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TargetInterface
{
    public function getPosition():PositionInterface;
}