<?php
namespace controller\move;

use model\data\position\Sky;
use interfaces\model\method\action\move\TargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class FlightController extends AbstractMoveController
{   
    public function moveTo(TargetInterface $target): void
    {
        $this->movingElement->setPosition(
            new Sky(
                $target->getPosition()->getLongitude(),
                $target->getPosition()->getLatitude(),
                $target->getPosition()->getHightOverSealevelInMeters()
                )
            );
    }
}

