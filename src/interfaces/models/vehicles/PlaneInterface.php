<?php
namespace interfaces\models\vehicles;

use interfaces\models\positions\SkyInterface;
use models\collections\PassengerCollection;

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

