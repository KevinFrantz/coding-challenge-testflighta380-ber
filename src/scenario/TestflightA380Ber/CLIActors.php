<?php
namespace scenario\TestflightA380Ber;

use model\gui\cli\material\person\Major;
use model\gui\cli\material\vehicle\plane\A380;
use model\gui\cli\material\vehicle\car\AircraftTractor;
use model\gui\cli\material\building\airport\BER;

/**
 *
 * @author kevinfrantz
 *        
 */
class CLIActors extends ActorCollection
{   
    public function __construct(ActorCollection $origin){
        $this->set(self::MAJOR,new Major($origin->getMajor()));
        $this->set(self::PLANE,new A380($origin->getPlane()));
        $this->set(self::AIRCRAFT_TRACTOR,new AircraftTractor($origin->getAircraftTractor()));
        $this->set(self::AIRPORT,new BER($origin->getAirport()));
        $this->set();
    }

    private function initJournalistCollection():void{
        $journalists = new JournalistCollection();
        for ($i=1;$i<=rand(1,500);$i++){
            $journalists->add(new Journalist());
        }
        $this->set(self::JOURNALISTS,$journalists);
    }
    
    private function initGuestCollection():void{
        $guests = new GuestCollection();
        for ($i=1;$i<=50;$i++){
            $guests->add(new Guest());
        }
        $this->set(self::GUEST,$guests);
    }
    
}

