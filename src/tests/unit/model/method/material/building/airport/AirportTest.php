<?php
namespace tests\unit\model\method\material\building\airport;

use PHPUnit\Framework\TestCase;
use interfaces\model\method\material\building\airport\AirportInterface;
use model\method\material\building\airport\Airport;
use model\data\material\building\airport\BER;
use interfaces\model\data\collection\RunwayCollectionInterface;
use interfaces\model\data\material\building\TerminalInterface;
use interfaces\model\data\collection\GateCollectionInterface;
use interfaces\model\method\material\building\tower\AirportTowerInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AirportTest extends TestCase
{
    /**
     * @var AirportInterface
     */
    protected $airport;
    
    protected function setUp():void{
        $this->airport = new Airport(new BER());
    }
    
    public function testGetRunways():void{
        $this->assertInstanceOf(RunwayCollectionInterface::class, $this->airport->getRunways());
    }
    
    public function testGetTerminal():void{
        $this->assertInstanceOf(TerminalInterface::class, $this->airport->getTerminal());
    }
    
    public function testGetGates():void{
        $this->assertInstanceOf(GateCollectionInterface::class, $this->airport->getGates());
    }
    
    public function testGetTower():void{
        $this->assertInstanceOf(AirportTowerInterface::class, $this->airport->getTower());
    }
}

