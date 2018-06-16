<?php
namespace controller\move;

use interfaces\model\method\action\move\TargetInterface;
use model\data\position\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
class DriveController extends AbstractMoveController
{

    public function moveTo(TargetInterface $target): void
    {
        $this->teleportationShortcut($target);
    }

    /**
     * In this World teleportation exists ;)
     */
    private function teleportationShortcut(TargetInterface $target): void
    {
        $this->movingElement->setMovingPosition(new Geo($target->getTargetPosition()
            ->getLongitude(), $target->getTargetPosition()
            ->getLatitude()));
    }
}