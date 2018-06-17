<?php
namespace tests\unit\controller;

use PHPUnit\Framework\TestCase;
use model\method\collection\GuestCollection;
use model\method\material\building\terminal\BerAirportTerminal as BerAirportTerminalOrigin;
use model\method\material\building\terminal\BerAirportTerminal;
use controller\move\DriveController;
use interfaces\model\method\action\move\MovingInterface;
use model\data\position\Geo;
use model\data\material\building\airport\BER;

/**
 *
 * @author kevinfrantz
 *        
 */
class DriveControllerTest extends TestCase
{

    /**
     *
     * @var DriveController
     */
    protected $controller;

    /**
     *
     * @var BerAirportTerminal
     */
    protected $target;

    /**
     *
     * @var GuestCollection
     */
    protected $movingElement;

    protected function setUp(): void
    {
        $this->movingElement = new GuestCollection();
        $this->movingElement->setPosition(new Geo());
        $this->target = new BerAirportTerminal(new BerAirportTerminalOrigin(new BER()));
        $this->controller = new DriveController($this->movingElement);
    }

    public function testGetter(): void
    {
        $this->assertInstanceOf(MovingInterface::class, $this->controller->getMovingElement());
    }

    public function testMove(): void
    {
        $this->controller->moveTo($this->target);
        $this->assertEquals($this->target->getPosition()
            ->getLatitude(), $this->movingElement->getPosition()
            ->getLatitude());
    }

    public function testMovingElementGetter(): void
    {
        $this->assertEquals($this->movingElement, $this->controller->getMovingElement());
    }
}