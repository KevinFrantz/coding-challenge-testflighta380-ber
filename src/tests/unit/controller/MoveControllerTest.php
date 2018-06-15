<?php
namespace tests\unit\controller;

use controller\MoveController;
use PHPUnit\Framework\TestCase;
use model\data\collection\GuestCollection;
use model\data\material\building\terminal\BerAirportTerminal;

/**
 *
 * @author kevinfrantz
 *        
 */
class MoveControllerTest extends TestCase
{

    protected $controller;

    protected $target;

    protected $movingElement;

    protected function setUp(): void
    {
        $this->movingElement = new GuestCollection();
        $this->target = new BerAirportTerminal();
        $this->controller = new MoveController($this->movingElement);
    }

    public function testMove()
    {
        $this->controller->moveTo($this->target);
        $this->assertEquals($this->target->getPosition(), $this->movingElement->getPosition());
    }
}