<?php
namespace interfaces\model\method\controller\move;

use interfaces\controller\ControllerInterface;
use interfaces\model\data\position\PositionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MoveInterface extends ControllerInterface
{
    public function getPosition():PositionInterface;
}

