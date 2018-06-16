<?php
namespace interfaces\scenario\actors;

use interfaces\model\data\material\building\airport\AirportInterface;
use interfaces\model\data\material\person\MajorInterface;
use model\data\collection\GuestCollection;
use interfaces\model\data\collection\JournalistCollection;
use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TestflightA380Ber extends ActorCollectionInterface
{
    public function getAirport():AirportInterface;
    
    public function getMajor():MajorInterface;
    
    public function getGuests(): GuestCollection;
    
    public function getJournalists(): JournalistCollection;
    
    public function getAircraftTractor(): AircraftTractorInterface;
    
    public function getPlane(): PlaneInterface;
}

