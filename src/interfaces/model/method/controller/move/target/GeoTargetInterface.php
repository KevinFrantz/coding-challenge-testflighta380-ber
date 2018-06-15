<?php
namespace interfaces\model\method\controller\move\target;

use interfaces\model\data\position\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GeoTargetInterface extends TargetInterface
{
    public function getPosition():GeoInterface;
}

