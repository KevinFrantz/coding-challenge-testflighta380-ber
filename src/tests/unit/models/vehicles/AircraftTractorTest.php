<?php
namespace tests\unit\models\vehicles;

use PHPUnit\Framework\TestCase;
use models\vehicles\cars\AircraftTractor;
use models\vehicles\planes\A380;
use models\positions\Geo;

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

