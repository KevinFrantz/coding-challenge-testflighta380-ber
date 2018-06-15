<?php
namespace interfaces\model\data\material\vehicle\car;

use interfaces\model\data\position\GeoInterface;
use interfaces\model\data\material\vehicle\VehicleInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface CarInterface extends VehicleInterface
{
    public function getPosition():GeoInterface;
    public function setPosition(GeoInterface $geo):void;
}

