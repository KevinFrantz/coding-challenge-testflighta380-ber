<?php
namespace tests\unit\controller;

use PHPUnit\Framework\TestCase;
use model\data\collection\GuestCollection;
use model\data\material\building\terminal\BerAirportTerminal;
use controller\move\DriveController;

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
        $this->target = new BerAirportTerminal();
        $this->controller = new DriveController($this->movingElement);
    }

    public function testMove(): void
    {
        $this->controller->moveTo($this->target);
        $this->assertEquals($this->target->getPosition(), $this->movingElement->getPosition());
    }
    
    public function testMovingElementGetter(): void
    {
        $this->assertEquals($this->movingElement,$this->controller->getMovingElement());
    }
}