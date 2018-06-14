<?php
namespace models\vehicles;

use models\AbstractVehicle;
use interfaces\models\positions\SkyInterface;
use interfaces\models\vehicles\PlaneInterface;

abstract class AbstractPlane extends AbstractVehicle implements PlaneInterface
{
    public function getPosition(): SkyInterface
    {
        return $this->position;
    }
}

