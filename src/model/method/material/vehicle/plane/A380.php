<?php
namespace model\method\material\vehicle\plane;

use interfaces\model\data\position\PositionInterface;
use interfaces\model\method\controller\move\MovingInterface;
use model\method\AbstractMethod;
/**
 *
 * @author kevinfrantz
 *        
 */
class A380 extends AbstractMethod implements MovingInterface{
    public function getPosition(): PositionInterface
    {}

    public function setPosition(PositionInterface $position): void
    {}


}

