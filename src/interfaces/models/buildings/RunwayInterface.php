<?php
namespace interfaces\models\buildings;

use interfaces\models\collections\VehicleCollectionInterface;
use interfaces\models\positions\SkyInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface RunwayInterface
{
    public function setVehicles(VehicleCollectionInterface $vehicles):void;
    
    public function getVehicles():VehicleCollectionInterface;
    
    public function getPosition():SkyInterface;
}

