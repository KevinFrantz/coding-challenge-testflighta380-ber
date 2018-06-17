<?php
namespace scenario\TestflightA380Ber;

use model\gui\cli\material\person\Major;
use model\gui\cli\collection\GuestCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
class CliCollection extends ActorCollection
{   
    /**
     * @var ActorCollection
     */
    protected $origin;
    
    /**
     * @param DataCollection $origin
     */
    public function __construct(ActorCollection $origin){
        $this->origin = $origin;
        $this->set(self::MAJOR,new Major($origin->getMajor()));
        #$this->set(self::AIRCRAFT_TRACTOR,new AircraftTractor($origin->getAircraftTractor()));
        #$this->set(self::AIRPORT,new Airport($origin->getAirport()));
        #$this->set(self::PLANE,new Plane($origin->getPlane()));
        $this->set(self::GUESTS, new GuestCollection($this->origin->getGuests()));
        #$this->set(self::JOURNALISTS, new JournalistCollection($origin));
    }
}

