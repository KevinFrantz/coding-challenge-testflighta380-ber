<?php
namespace interfaces\model\method\controller\move\target;

use interfaces\model\method\controller\move\MoveInterface;
use interfaces\model\data\position\PositionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TargetInterface extends TargetInterface
{
    public function getPosition():PositionInterface;
}