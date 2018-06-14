<?php
namespace tests\unit\models\buildings\runways;

use PHPUnit\Framework\TestCase;
use models\buildings\runways\BerAirportRunway2;
use models\vehicles\planes\A380;
use models\vehicles\cars\AircraftTractor;
use models\collections\VehicleCollection;

/**
 * BerAirportRunway2Test test case.
 */
class BerAirportRunway2Test extends TestCase
{

    /**
     *
     * @var BerAirportRunway2
     */
    private $berAirportRunway2;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->berAirportRunway2 = new BerAirportRunway2();
    }
    
    protected function testVehiclesAccessors():void{
        $this->berAirportRunway2->setCar(new VehicleCollection());
        $this->assertInstanceOf("VehiclesCollection",$this->berAirportRunway2->getVehicle());
    }
}

