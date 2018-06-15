<?php
namespace interfaces\model\method\controller\move\target;

use interfaces\model\data\position\SkyInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface SkyTargetInterface extends TargetInterface
{
    public function getPosition():SkyInterface;
}

