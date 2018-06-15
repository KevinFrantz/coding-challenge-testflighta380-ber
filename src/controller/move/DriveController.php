<?php
namespace controller\move;

use interfaces\model\method\controller\move\moving\MovingInterface;
use interfaces\model\method\controller\move\target\TargetInterface;
use interfaces\controller\move\DriveControllerInterface;
use interfaces\model\method\controller\move\moving\DriveInterface;
use interfaces\model\method\controller\move\target\GeoTargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class DriveController extends MoveController
{
    public function __construct(DriveInterface $movingElement)
    {}

    public function getMovingElement(): DriveInterface
    {}

    public function moveTo(GeoTargetInterface $target): void
    {}

}

