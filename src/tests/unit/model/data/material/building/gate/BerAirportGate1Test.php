<?php
namespace tests\unit\model\data\material\building\gate;

use model\data\material\building\gate\BerAirportGate1;
use PHPUnit\Framework\TestCase;
use model\data\material\vehicle\plane\A380;
use model\data\collection\GuestCollection;
use model\data\material\vehicle\plane\AbstractPlane;
use model\data\position\Geo;

/**
 * BerAirportGate1 test case.
 */
class BerAirportGate1Test extends TestCase
{

    /**
     *
     * @var BerAirportGate1
     */
    private $berAirportGate1;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp():void
    {
        $this->berAirportGate1 = new BerAirportGate1();
    }
    
    public function testPlaneAccessors():void{
        $this->berAirportGate1->setPlane(new A380());
        $this->assertInstanceOf(AbstractPlane::class,$this->berAirportGate1->getPlane());
    }
    
    public function testGuestAccessors():void{
        $this->berAirportGate1->setGuests(new GuestCollection());
        $this->assertInstanceOf(GuestCollection::class,$this->berAirportGate1->getGuests());
    }
    
    public function testPositionAccessor():void{
        $this->assertInstanceOf(Geo::class,$this->berAirportGate1->getPosition());
    }
}

