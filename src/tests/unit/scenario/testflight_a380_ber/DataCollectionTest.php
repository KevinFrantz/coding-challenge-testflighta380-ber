<?php
namespace tests\unit\scenario\testflight_a380_ber;

use PHPUnit\Framework\TestCase;
use scenario\TestflightA380Ber\DataCollection;
use interfaces\model\data\material\person\MajorInterface;
use model\data\collection\GuestCollection;
use model\data\collection\JournalistCollection;
use model\data\material\vehicle\plane\A380;
use model\data\material\vehicle\car\AircraftTractor;
use interfaces\model\data\material\building\airport\AirportInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class DataCollectionTest extends TestCase
{
    /**
     * @var DataCollection
     */
    protected $data;
    
    protected function setUp():void{
        $this->data = new DataCollection();
    }
    
    public function testMajor():void{
        $this->assertInstanceOf(MajorInterface::class, $this->data->getMajor());
    }
    
    public function testGuest():void{
        $this->assertInstanceOf(GuestCollection::class, $this->data->getGuests());
    }
    
    public function testJournalists():void{
        $this->assertInstanceOf(JournalistCollection::class, $this->data->getJournalists());
    }
    
    public function testPlane():void{
        $this->assertInstanceOf(A380::class, $this->data->getPlane());
    }
    
    public function testAircraftTractor():void{
        $this->assertInstanceOf(AircraftTractor::class, $this->data->getAircraftTractor());
    }
    
    public function testAirport():void{
        $this->assertInstanceOf(AirportInterface::class, $this->data->getAirport());
    }
}

