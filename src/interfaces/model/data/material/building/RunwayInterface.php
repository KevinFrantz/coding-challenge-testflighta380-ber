<?php
namespace interfaces\model\data\material\building;

use interfaces\model\data\collection\VehicleCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface RunwayInterface extends BuildingInterface
{

    public function setVehicles(VehicleCollectionInterface $vehicles): void;

    public function getVehicles(): VehicleCollectionInterface;
}

