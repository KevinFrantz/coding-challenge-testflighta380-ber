<?php
namespace tests\unit\scenario\testflight_a380_ber;

use PHPUnit\Framework\TestCase;
use scenario\TestflightA380Ber\ActorCollection;
use scenario\TestflightA380Ber\CliCollection;
use scenario\TestflightA380Ber\DataCollection;
use interfaces\model\gui\cli\CliInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class CliCollectionTest extends TestCase
{
    /**
     * @var ActorCollection
     */
    protected $actors;
    
    /**
     * @var CliCollection
     */
    protected $cli;
        
    protected function setUp():void{
        $this->actors = new ActorCollection(new DataCollection());
        $this->cli = new CliCollection($this->actors);
        
    }
    
    public function testMajor():void{
        $this->assertInstanceOf(CliInterface::class, $this->cli->getMajor());
    }
    
    public function testGuest():void{
        $this->assertInstanceOf(CliInterface::class, $this->cli->getGuests());
    }
    
    public function testJournalists():void{
        $this->assertInstanceOf(CliInterface::class, $this->cli->getJournalists());
    }
    
    public function testPlane():void{
        $this->assertInstanceOf(CliInterface::class, $this->cli->getPlane());
    }
    
    public function testAircraftTractor():void{
        $this->assertInstanceOf(CliInterface::class, $this->cli->getAircraftTractor());
    }
    
    public function testAirport():void{
        $this->assertInstanceOf(CliInterface::class, $this->cli->getAirport());
    }
}
