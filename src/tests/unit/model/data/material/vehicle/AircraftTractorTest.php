<?php
namespace tests\unit\model\data\material\vehicle;

use PHPUnit\Framework\TestCase;
use model\data\material\vehicle\car\AircraftTractor;
use model\data\material\vehicle\plane\A380;
use model\data\position\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
class AircraftTractorTest extends TestCase
{
    private $aircraftTractor;
    
    protected function setUp(){
        $this->aircraftTractor = new AircraftTractor();
    }
    
    public function testPlaneAccessor():void{
        $this->aircraftTractor->setPlane(new A380());
        $this->assertInstanceOf(A380::class,$this->aircraftTractor->getPlane());
    }
    
    public function testPositionAccessor():void{
        $this->aircraftTractor->setPosition(new Geo());
        $this->assertInstanceOf(Geo::class,$this->aircraftTractor->getPosition());
    }
}

