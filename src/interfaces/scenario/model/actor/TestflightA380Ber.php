<?php
namespace interfaces\scenario\model\actor;

use interfaces\model\data\material\building\airport\AirportInterface;
use interfaces\model\data\material\person\MajorInterface;
use interfaces\model\data\collection\JournalistCollectionInterface;
use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use interfaces\model\data\collection\GuestCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TestflightA380Ber extends ActorCollectionInterface
{
    /**
     * @return AirportInterface
     */
    public function getAirport():AirportInterface;
    
    /**
     * @return MajorInterface
     */
    public function getMajor():MajorInterface;
    
    /**
     * @return GuestCollectionInterface
     */
    public function getGuests(): GuestCollectionInterface;
    
    /**
     * @return JournalistCollectionInterface
     */
    public function getJournalists(): JournalistCollectionInterface;
    
    /**
     * @return AircraftTractorInterface
     */
    public function getAircraftTractor(): AircraftTractorInterface;
    
    /**
     * @return PlaneInterface
     */
    public function getPlane(): PlaneInterface;
}

