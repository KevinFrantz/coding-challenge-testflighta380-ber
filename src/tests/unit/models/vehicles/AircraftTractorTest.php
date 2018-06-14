<?php
namespace tests\unit\models\vehicles;

use PHPUnit\Framework\TestCase;
use models\vehicles\cars\AircraftTractor;
use models\vehicles\planes\A380;

/**
 *
 * @author kevinfrantz
 *        
 */
class AircraftTractorTest extends TestCase
{
    protected function setUp(){
        $this->aircraftTractor = new AircraftTractor();
    }
    
    public function testPlaneAccessor():void{
        $this->aircraftTractor->setPlane(new A380());
        $this->assertInstanceOf(A380::class,$this->aircraftTractor->getPlane());
    }
}

