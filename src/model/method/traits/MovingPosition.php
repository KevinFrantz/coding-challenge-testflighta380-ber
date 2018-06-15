<?php
namespace model\method\traits;

use model\data\position\AbstractPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
trait MovingPosition {

    protected $position;

    public function getMovingPosition(): AbstractPosition
    {
        return $this->position;
    }

    public function setMovingPosition(AbstractPosition $position): void
    {
        $this->position = $position;
    }
}

