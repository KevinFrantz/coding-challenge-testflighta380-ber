<?php
namespace model\data\material\building\runway;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\RunwayInterface;
use interfaces\model\data\collection\VehicleCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractRunway extends AbstractBuilding implements RunwayInterface
{
    /**
     * @var VehicleCollectionInterface
     */
    protected $vehicles;
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\RunwayInterface::getVehicles()
     */
    public function getVehicles(): VehicleCollectionInterface
    {
        return $this->vehicles;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\RunwayInterface::setVehicles()
     */
    public function setVehicles(VehicleCollectionInterface $vehicles): void
    {
        $this->vehicles = $vehicles;
    }
}

