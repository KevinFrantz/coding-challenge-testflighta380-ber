<?php
namespace scenario\TestflightA380Ber;

use scenario\AbstractActorCollection;
use interfaces\model\data\material\building\airport\AirportInterface;
use interfaces\model\data\material\person\MajorInterface;
use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use interfaces\scenario\actors\TestflightA380Ber;
use model\data\collection\GuestCollection;
use model\data\material\person\Major;
use model\data\material\building\airport\BER;
use model\data\collection\JournalistCollection;
use interfaces\model\data\collection\JournalistCollectionInterface;
use model\data\material\vehicle\plane\A380;
use model\data\material\person\Journalist;
use model\data\material\person\Guest;

/**
 *
 * @author kevinfrantz
 *        
 */
class ActorCollection extends AbstractActorCollection implements TestflightA380Ber
{
    const MAJOR = 1;
    const GUESTS = 2;
    const JOURNALISTS = 3;
    const PLANE = 4;
    const AIRCRAFT_TRACTOR = 5;
    const AIRPORT = 6;
    
    public function __construct(){
       $this->set(self::MAJOR,new Major());
       $this->set(self::GUESTS,new Major());
       $this->set(self::AIRPORT,new BER());
       $this->initPlane();
       $this->initJournalistCollection();
       $this->initGuestCollection();
    }
    
    private function initPlane():void{
        $plane = new A380();
        $plane->setName('Wright Brothers Flight');
        $this->set(self::PLANE,$plane);
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
    
    /**
     * {@inheritDoc}
     * @see \interfaces\scenario\actors\TestflightA380Ber::getAircraftTractor()
     */
    public function getAircraftTractor(): AircraftTractorInterface
    {
        return $this->get(self::AIRCRAFT_TRACTOR);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\scenario\actors\TestflightA380Ber::getAirport()
     */
    public function getAirport(): AirportInterface
    {
        return $this->get(self::AIRPORT);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\scenario\actors\TestflightA380Ber::getMajor()
     */
    public function getMajor(): MajorInterface
    {
        return $this->get(self::MAJOR);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\scenario\actors\TestflightA380Ber::getJournalists()
     */
    public function getJournalists(): JournalistCollectionInterface
    {
        return $this->get(self::JOURNALISTS);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\scenario\actors\TestflightA380Ber::getGuests()
     */
    public function getGuests(): GuestCollection
    {
        return $this->get(self::GUESTS);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\scenario\actors\TestflightA380Ber::getPlane()
     */
    public function getPlane(): PlaneInterface
    {
        return $this->get(self::PLANE);
    }
}