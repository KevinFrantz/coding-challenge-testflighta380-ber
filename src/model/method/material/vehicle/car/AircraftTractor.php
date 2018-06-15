<?php
namespace model\method\material\vehicle\car;

use model\data\material\vehicle\car\AircraftTractor as AircraftTractorOrigin;
use interfaces\model\method\move\MovingInterface;
use model\method\traits\MovingPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
class AircraftTractor extends AircraftTractorOrigin implements MovingInterface
{
    use MovingPosition;
}

