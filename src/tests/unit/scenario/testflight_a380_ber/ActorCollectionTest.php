<?php
namespace tests\unit\scenario\testflight_a380_ber;

use scenario\TestflightA380Ber\ActorCollection;
use interfaces\model\method\material\person\MajorInterface;
use model\method\collection\GuestCollection;
use model\method\collection\JournalistCollection;
use model\method\material\vehicle\plane\A380;
use model\method\material\vehicle\car\AircraftTractor;
use model\method\material\building\airport\Airport;

/**
 *
 * @author kevinfrantz
 *        
 */
class ActorCollectionTest extends DataCollectionTest
{
    /**
     * @var ActorCollection
     */
    protected $actors;
    
    protected function setUp():void{
        parent::setUp();
        $this->actors = new ActorCollection($this->data);
    }
    
    public function testMajor():void{
        $this->assertInstanceOf(MajorInterface::class, $this->actors->getMajor());
    }
    
    public function testGuest():void{
        $this->assertInstanceOf(GuestCollection::class, $this->actors->getGuests());
    }
    
    public function testJournalists():void{
        $this->assertInstanceOf(JournalistCollection::class, $this->actors->getJournalists());
    }
    
    public function testPlane():void{
        $this->assertInstanceOf(A380::class, $this->actors->getPlane());
    }
    
    public function testAircraftTractor():void{
        $this->assertInstanceOf(AircraftTractor::class, $this->actors->getAircraftTractor());
    }
    
    public function testAirport():void{
        $this->assertInstanceOf(Airport::class, $this->actors->getAirport());
    }
}

