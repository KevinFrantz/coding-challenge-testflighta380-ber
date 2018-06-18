<?php
namespace interfaces\model\method\material\vehicle\car;

use interfaces\model\data\material\vehicle\car\AircraftTractorInterface as DataAircraftTractorInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface AircraftTractorInterface extends CarInterface, DataAircraftTractorInterface
{
    /**
     * @return bool
     */
    public function hasPlane():bool;
}