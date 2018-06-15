<?php
namespace model\method\material\vehicle\plane;

use model\data\material\vehicle\plane\A380 as A380Origin;
use interfaces\model\method\move\MovingInterface;
use model\method\traits\MovingPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
class A380 extends A380Origin implements MovingInterface
{
    use MovingPosition;
}

