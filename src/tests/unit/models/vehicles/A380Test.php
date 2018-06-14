<?php
namespace tests\unit\models\vehicles;

use PHPUnit\Framework\TestCase;
use models\vehicles\planes\A380;
use models\locations\Sky;
use models\collections\PassengerCollection;

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

