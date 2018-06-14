<?php
namespace models\buildings;

use models\AbstractBuilding;
use interfaces\models\buildings\RunwayInterface;
use interfaces\models\collections\VehicleCollectionInterface;
use interfaces\models\positions\SkyInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractRunway extends AbstractBuilding implements RunwayInterface
{
    protected $vehicles;
    
    public function getVehicles(): VehicleCollectionInterface
    {
        return $this->vehicles;
    }

    public function setVehicles(VehicleCollectionInterface $vehicles): void
    {
        $this->vehicles = $vehicles;
    }
    public function getPosition(): SkyInterface
    {
        return $this->position;
    }
}

