<?php
namespace models\vehicles;

use interfaces\models\positions\GeoInterface;
use interfaces\models\vehicles\CarInterface;
use models\AbstractVehicle;

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

