<?php
namespace scenario\TestflightA380Ber;

use scenario\AbstractDataCollection;
use interfaces\model\data\collection\JournalistCollectionInterface;
use interfaces\model\data\material\building\airport\AirportInterface;
use interfaces\model\data\material\person\MajorInterface;
use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use interfaces\scenario\model\actor\TestflightA380Ber;
use model\data\material\person\Major;
use model\data\material\person\Guest;
use model\data\material\building\airport\BER;
use model\data\material\vehicle\plane\A380;
use model\data\collection\JournalistCollection;
use model\data\material\person\Journalist;
use model\data\material\vehicle\car\AircraftTractor;
use interfaces\model\data\collection\GuestCollectionInterface;
use model\data\collection\GuestCollection;
use interfaces\model\data\material\person\PilotInterface;
use model\data\material\person\Pilot;

/**
 *
 * @author kevinfrantz
 *        
 */
class DataCollection extends AbstractDataCollection implements TestflightA380Ber
{

    const MAJOR = 1;

    const GUESTS = 2;

    const JOURNALISTS = 3;

    const PLANE = 4;

    const AIRCRAFT_TRACTOR = 5;

    const AIRPORT = 6;

    public function __construct()
    {
        $this->set(self::MAJOR, new Major());
        $this->set(self::AIRCRAFT_TRACTOR, new AircraftTractor());
        $this->set(self::AIRPORT, new BER());
        $this->initPlane();
        $this->initJournalistCollection();
        $this->initGuestCollection();
    }

    private function initPlane(): void
    {
        $plane = new A380();
        $plane->setName('Wright Brothers Flight');
        $plane->setPilot($this->generatePilot());
        $this->set(self::PLANE, $plane);
    }

    /**
     * @return PilotInterface
     */
    private function generatePilot():PilotInterface{
       $pilot = new Pilot();
       $pilot->setName('Alexander Gerst');
       return $pilot;
    }
    
    private function initJournalistCollection(): void
    {
        $journalists = new JournalistCollection();
        for ($i = 1; $i <= rand(1, 500); $i ++) {
            $journalists->add(new Journalist());
        }
        $this->set(self::JOURNALISTS, $journalists);
    }

    private function initGuestCollection(): void
    {
        $guests = new GuestCollection();
        for ($i = 1; $i <= 50; $i ++) {
            $guests->add(new Guest());
        }
        $this->set(self::GUESTS, $guests);
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\scenario\model\actor\TestflightA380Ber::getAircraftTractor()
     */
    public function getAircraftTractor(): AircraftTractorInterface
    {
        return $this->get(self::AIRCRAFT_TRACTOR);
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\scenario\model\actor\TestflightA380Ber::getAirport()
     */
    public function getAirport(): AirportInterface
    {
        return $this->get(self::AIRPORT);
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\scenario\model\actor\TestflightA380Ber::getMajor()
     */
    public function getMajor(): MajorInterface
    {
        return $this->get(self::MAJOR);
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\scenario\model\actor\TestflightA380Ber::getJournalists()
     */
    public function getJournalists(): JournalistCollectionInterface
    {
        return $this->get(self::JOURNALISTS);
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\scenario\model\actor\TestflightA380Ber::getGuests()
     */
    public function getGuests(): GuestCollectionInterface
    {
        return $this->get(self::GUESTS);
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\scenario\model\actor\TestflightA380Ber::getPlane()
     */
    public function getPlane(): PlaneInterface
    {
        return $this->get(self::PLANE);
    }
}

