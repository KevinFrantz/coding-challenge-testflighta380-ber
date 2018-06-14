<?php
namespace tests\unit\models\buildings\gate;

use models\buildings\gates\BerAirportGate1;
use PHPUnit\Framework\TestCase;
use models\vehicles\planes\A380;
use models\collections\GuestCollection;
use models\vehicles\AbstractPlane;
use models\positions\Geo;

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

