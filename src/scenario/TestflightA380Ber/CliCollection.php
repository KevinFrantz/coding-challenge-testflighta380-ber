<?php
namespace scenario\TestflightA380Ber;

use model\gui\cli\material\person\Major;
use model\gui\cli\collection\GuestCollection;
use model\gui\cli\collection\JournalistCollection;
use model\gui\cli\material\vehicle\car\AircraftTractor;
use model\gui\cli\material\building\airport\Airport;
use model\gui\cli\material\vehicle\plane\A380;
use interfaces\repository\output\PrintRepositoryInterface;

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
    public function __construct(ActorCollection $origin,?PrintRepositoryInterface $repository=null){
        $this->origin = $origin;
        $this->set(self::MAJOR,new Major($origin->getMajor(),$repository));
        $this->set(self::AIRCRAFT_TRACTOR,new AircraftTractor($origin->getAircraftTractor(),$repository));
        $this->set(self::AIRPORT,new Airport($origin->getAirport(),$repository));
        $this->set(self::PLANE,new A380($origin->getPlane(),$repository));
        $this->set(self::GUESTS, new GuestCollection($origin->getGuests(),$repository));
        $this->set(self::JOURNALISTS, new JournalistCollection($origin->getJournalists(),$repository));
    }
}

