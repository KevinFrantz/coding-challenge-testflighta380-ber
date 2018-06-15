<?php
namespace tests\unit\controller;

use PHPUnit\Framework\TestCase;
use model\method\collection\GuestCollection;
use model\method\material\building\terminal\BerAirportTerminal;
use controller\move\DriveController;
use interfaces\model\method\move\MovingInterface;
use model\data\position\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
class DriveControllerTest extends TestCase
{

    protected $controller;

    protected $target;

    protected $movingElement;

    protected function setUp(): void
    {
        $this->movingElement = new GuestCollection();
        $this->movingElement->setMovingPosition(new Geo());
        $this->target = new BerAirportTerminal();
        $this->controller = new DriveController($this->movingElement);
    }
    
    public function testGetter(){
        $this->assertInstanceOf(MovingInterface::class, $this->controller->getMovingElement());
    }

    public function testMove(): void
    {
        $this->controller->moveTo($this->target);
        $this->assertEquals($this->target->getPosition()->getLatitude(), $this->movingElement->getMovingPosition()->getLatitude());
    }
    
    public function testMovingElementGetter(): void
    {
        $this->assertEquals($this->movingElement,$this->controller->getMovingElement());
    }
}