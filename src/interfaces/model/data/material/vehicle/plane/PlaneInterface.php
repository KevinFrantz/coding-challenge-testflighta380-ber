<?php
namespace interfaces\model\data\material\vehicle\plane;

use interfaces\model\data\position\SkyInterface;
use model\data\collection\PassengerCollection;
use interfaces\model\data\material\vehicle\VehicleInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface PlaneInterface extends VehicleInterface
{   
    public function setPassengers(PassengerCollection $passengers):void;
    
    public function getPassengers():PassengerCollection;
}

