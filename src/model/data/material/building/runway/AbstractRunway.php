<?php
namespace model\data\material\building\runway;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\RunwayInterface;
use interfaces\model\data\collection\VehicleCollectionInterface;
use interfaces\model\data\position\SkyInterface;

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

