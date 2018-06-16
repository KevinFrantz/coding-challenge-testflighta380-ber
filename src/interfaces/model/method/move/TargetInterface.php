<?php
namespace interfaces\model\method\move;

use model\data\position\AbstractPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TargetInterface
{
    public function getPosition() :AbstractPosition;
}

