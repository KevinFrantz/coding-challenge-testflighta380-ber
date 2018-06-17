<?php
namespace tests\unit\scenario\testflight_a380_ber;

use scenario\TestflightA380Ber\ActorCollection;
use interfaces\model\method\material\person\MajorInterface;
use model\method\collection\JournalistCollection;
use model\method\material\vehicle\car\AircraftTractor;
use interfaces\model\method\material\building\airport\AirportInterface;
use interfaces\model\method\collection\GuestCollectionInterface;
use interfaces\model\method\material\vehicle\plane\PlaneInterface;
use PHPUnit\Framework\TestCase;
use scenario\TestflightA380Ber\DataCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
class ActorCollectionTest extends TestCase
{
    /**
     * @var ActorCollection
     */
    protected $actors;
    
    /**
     * @var DataCollection
     */
    protected $data;
    
    protected function setUp():void{
        $this->data = new DataCollection();
        $this->actors = new ActorCollection($this->data);
    }
    
    public function testMajor():void{
        $this->assertInstanceOf(MajorInterface::class, $this->actors->getMajor());
    }
    
    public function testGuest():void{
        $this->assertInstanceOf(GuestCollectionInterface::class, $this->actors->getGuests());
    }
    
    public function testJournalists():void{
        $this->assertInstanceOf(JournalistCollection::class, $this->actors->getJournalists());
    }
    
    public function testPlane():void{
        $this->assertInstanceOf(PlaneInterface::class, $this->actors->getPlane());
    }
    
    public function testAircraftTractor():void{
        $this->assertInstanceOf(AircraftTractor::class, $this->actors->getAircraftTractor());
    }
    
    public function testAirport():void{
        $this->assertInstanceOf(AirportInterface::class, $this->actors->getAirport());
    }
}

