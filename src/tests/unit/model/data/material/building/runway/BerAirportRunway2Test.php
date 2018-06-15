<?php
namespace tests\unit\model\data\material\building\runway;

use PHPUnit\Framework\TestCase;
use model\data\material\building\runway\BerAirportRunway2;
use model\data\collection\VehicleCollection;
use model\data\position\Sky;

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
    
    public function testVehiclesAccessors():void{
        $this->berAirportRunway2->setVehicles(new VehicleCollection());
        $this->assertInstanceOf(VehicleCollection::class,$this->berAirportRunway2->getVehicles());
    }
    
    public function testPositionAccessor():void{
        $this->assertInstanceOf(Sky::class,$this->berAirportRunway2->getPosition());
    }
}

