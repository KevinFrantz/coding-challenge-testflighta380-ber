<?php
namespace model\data\material\building\airport;

use model\data\material\building\runway\BerAirportRunway2;
use model\data\material\building\gate\BerAirportGate1;
use model\data\material\building\terminal\BerAirportTerminal;
use model\data\material\building\tower\BerAirportTower;
use model\data\collection\GateCollection;
use model\data\collection\RunwayCollection;
use model\data\position\Sky;

class BER extends AbstractAirport
{

    public function __construct()
    {
        $this->runways = new RunwayCollection([
            new BerAirportRunway2()
        ]);
        $this->gates = new GateCollection([
            new BerAirportGate1()
        ]);
        $this->terminal = new BerAirportTerminal();
        $this->tower = new BerAirportTower($this);
        $this->position = new Sky(13.00,52.00,0);
    }
}

