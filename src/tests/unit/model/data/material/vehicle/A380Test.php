<?php
namespace tests\unit\model\data\material\vehicle;

use PHPUnit\Framework\TestCase;
use model\data\material\vehicle\plane\A380;
use model\data\position\Sky;
use model\data\collection\PassengerCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
class A380Test extends TestCase
{

    private $a380;

    protected function setUp(): void
    {
        $this->a380 = new A380();
    }

    public function targetAccessors(): void
    {
        $this->a380->setTarget(new Sky());
        $this->assertInstanceOf(Sky::class, $this->getTarget());
    }
    
    public function testPositionAccessor():void{
        $this->a380->setPosition(new Sky());
        $this->assertInstanceOf(Sky::class,$this->a380->getPosition());
    }
    
    public function testPassengersAccessors():void{
        $this->a380->setPassengers(new PassengerCollection());
        $this->assertInstanceOf(PassengerCollection::class,$this->a380->getPassengers());
    }
}

