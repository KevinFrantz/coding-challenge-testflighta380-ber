<?php
namespace interfaces\models\vehicles\cars;

use interfaces\models\vehicles\CarInterface;
use interfaces\models\vehicles\PlaneInterface;

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

