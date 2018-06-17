<?php
namespace interfaces\scenario\model\actor;

use interfaces\model\data\material\building\airport\AirportInterface;
use interfaces\model\data\material\person\MajorInterface;
use model\data\collection\GuestCollection;
use interfaces\model\data\collection\JournalistCollectionInterface;
use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;

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
     * @return GuestCollection
     */
    public function getGuests(): GuestCollection;
    
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

