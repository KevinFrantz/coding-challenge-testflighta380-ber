<?php
namespace interfaces\model\data\material\vehicle;

use interfaces\model\data\position\SkyInterface;
use model\data\collection\PassengerCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
interface PlaneInterface
{
    public function setPosition(SkyInterface $position):void;
    
    public function getPosition():SkyInterface;
    
    public function setPassengers(PassengerCollection $passengers):void;
    
    public function getPassengers():PassengerCollection;
    
}

