<?php
namespace interfaces\model\data\material\vehicle\car;

use interfaces\model\data\material\vehicle\CarInterface;
use interfaces\model\data\material\vehicle\PlaneInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface AircraftTractorInterface extends CarInterface
{
    public function setPlane(PlaneInterface $plane):void;
    
    public function getPlane():?PlaneInterface;
}

