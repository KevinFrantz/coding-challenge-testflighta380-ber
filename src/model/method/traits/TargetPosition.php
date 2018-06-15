<?php
namespace model\method\traits;

use model\data\position\AbstractPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
trait TargetPosition{

    protected $position;

    public function getTargetPosition(): AbstractPosition
    {
        return $this->position;
    }
}

