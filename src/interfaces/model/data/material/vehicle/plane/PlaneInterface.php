<?php
namespace interfaces\model\data\material\vehicle\plane;

use interfaces\model\data\material\vehicle\VehicleInterface;
use interfaces\model\data\material\person\PilotInterface;
use model\data\collection\PersonCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
interface PlaneInterface extends VehicleInterface
{   
    public function setPassengers(PersonCollection $passengers):void;
    
    public function getPassengers():PersonCollection;
    
    public function getPilot():PilotInterface;
    
    public function setPilot($pilot):void;
}

