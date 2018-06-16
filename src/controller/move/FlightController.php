<?php
namespace controller\move;

use model\data\position\Sky;
use interfaces\model\method\move\TargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class FlightController extends AbstractMoveController
{   
    public function moveTo(TargetInterface $target): void
    {
        $this->movingElement->setMovingPosition(
            new Sky(
                $target->getTargetPosition()->getLongitude(),
                $target->getTargetPosition()->getLatitude(),
                $target->getTargetPosition()->getHightOverSealevelInMeters()
                )
            );
    }
}

