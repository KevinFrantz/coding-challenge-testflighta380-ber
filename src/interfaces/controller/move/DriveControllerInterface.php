<?php
namespace interfaces\controller\move;

use interfaces\model\method\controller\move\target\GeoTargetInterface;
use interfaces\model\method\controller\move\moving\DriveInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface DriveControllerInterface extends MoveControllerInterface
{
    public function __construct(DriveInterface $movingElement);
    
    public function moveTo(GeoTargetInterface $target):void;
    
    public function getMovingElement():DriveInterface;
}

