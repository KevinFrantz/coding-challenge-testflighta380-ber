<?php
namespace tests\unit\controller;

use model\data\material\vehicle\plane\A380;
use model\data\material\building\runway\BerAirportRunway2;
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
        $this->controller = new FlightController();
    }
}

