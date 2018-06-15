<?php
namespace interfaces\model\data\material\building;

use interfaces\model\data\position\SkyInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TowerInterface
{
    public function getPosition():SkyInterface;
}

