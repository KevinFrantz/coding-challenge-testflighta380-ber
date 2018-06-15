<?php
namespace tests\unit\controller;

use model\method\material\vehicle\plane\A380;
use model\method\material\building\runway\BerAirportRunway2;
use controller\move\FlightController;

/**
 *
 * @author kevinfrantz
 *        
 */
class FlightControllerTest extends DriveControllerTest
{

    protected function setUp(): void
    {
        $this->movingElement = new A380();
        $this->target = new BerAirportRunway2();
        $this->controller = new FlightController($this->movingElement);
    }
}

