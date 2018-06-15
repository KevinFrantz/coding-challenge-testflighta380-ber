<?php
namespace model\data\material\vehicle\car;

use interfaces\model\data\position\GeoInterface;
use interfaces\model\data\material\vehicle\CarInterface;
use model\data\material\vehicle\AbstractVehicle;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractCar extends AbstractVehicle implements CarInterface
{
    public function getPosition(): GeoInterface
    {
        return $this->position;
    }

    public function setPosition(GeoInterface $geo): void
    {
        $this->position = $geo;
    }
}

