<?php
namespace interfaces\models\buildings;

use interfaces\models\vehicles\PlaneInterface;
use interfaces\models\collections\GuestCollectionInterface;
use interfaces\models\positions\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GateInterface
{
    public function getPlane():?PlaneInterface;
    
    public function setPlane(PlaneInterface $plane):void;
    
    public function setGuests(GuestCollectionInterface $guest):void;
    
    public function getGuests():GuestCollectionInterface;
    
    public function getPosition():GeoInterface;
}

