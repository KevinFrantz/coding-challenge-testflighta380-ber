<?php
namespace interfaces\models\buildings;

use interfaces\models\collections\VehicleCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface RunwayInterface
{
    public function setVehicles(VehicleCollectionInterface $vehicles):void;
    
    public function getVehicles():VehicleCollectionInterface;
}

