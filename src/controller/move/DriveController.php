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
        $this->movingElement->setPosition(new Geo($target->getPosition()
            ->getLongitude(), $target->getPosition()
            ->getLatitude()));
    }
}