<?php
namespace scenario\TestflightA380Ber;

use interfaces\scenario\model\actor\TestflightA380Ber;
use model\method\material\person\Major;
use model\method\material\vehicle\car\AircraftTractor;
use model\method\material\building\airport\Airport;
use model\method\collection\JournalistCollection;
use model\method\collection\GuestCollection;
use model\gui\cli\material\vehicle\plane\Plane;

/**
 *
 * @author kevinfrantz
 *        
 */
class ActorCollection extends DataCollection implements TestflightA380Ber
{
    /**
     * @var DataCollection
     */
    protected $origin;
    
    /**
     * @param DataCollection $origin
     */
    public function __construct(DataCollection $origin){
       $this->origin = $origin;
       $this->set(self::MAJOR,new Major($origin->getMajor()));
       $this->set(self::AIRCRAFT_TRACTOR,new AircraftTractor($origin->getAircraftTractor()));
       $this->set(self::AIRPORT,new Airport($origin->getAirport()));
       $this->set(self::PLANE,new Plane($origin->getPlane()));
       $this->set(self::GUESTS, new GuestCollection($this->origin->getGuests()));
       $this->get(self::JOURNALISTS, new JournalistCollection($origin));
    }
}