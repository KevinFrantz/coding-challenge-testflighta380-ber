<?php
namespace interfaces\model\data\material\building;

use interfaces\model\data\position\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TerminalInterface extends BuildingInterface
{

    public function getPosition(): GeoInterface;
}

