<?php
namespace interfaces\controller\move;

use interfaces\controller\ControllerInterface;
use interfaces\model\data\position\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MoveControllerInterface extends ControllerInterface
{

    public function moveTo(GeoInterface $target): void;

    public function getMovingElement(): GeoInterface;
}

