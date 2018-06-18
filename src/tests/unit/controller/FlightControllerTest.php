<?php
namespace tests\unit\controller;

use model\method\material\vehicle\plane\A380;
use model\data\material\vehicle\plane\A380 as A380Original;
use model\method\material\building\runway\AirportRunway;
use controller\move\FlightController;
use model\data\position\Sky;
use model\data\material\building\airport\BER;
use model\data\material\building\runway\BerAirportRunway2;

/**
 *
 * @author kevinfrantz
 *        
 */
class FlightControllerTest extends DriveControllerTest
{

    protected function setUp(): void
    {
        $this->movingElement = new A380(new A380Original());
        $this->movingElement->setPosition(new Sky());
        $this->target = new AirportRunway(new BerAirportRunway2(new BER()));
        $this->controller = new FlightController($this->movingElement);
    }
}

