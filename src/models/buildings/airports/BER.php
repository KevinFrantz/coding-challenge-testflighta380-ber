<?php
namespace models\buildings\airports;

use models\buildings\AbstractAirport;
use models\buildings\runways\BerAirportRunway2;
use models\buildings\gates\BerAirportGate1;
use models\buildings\terminals\BerAirportTerminal;
use models\buildings\towers\BerAirportTower;
use models\collections\GateCollection;
use models\collections\RunwayCollection;
use models\positions\Sky;

final class BER extends AbstractAirport
{

    public function __construct()
    {
        $this->runways=new RunwayCollection([new BerAirportRunway2()]);
        $this->gates=new GateCollection([new BerAirportGate1()]);
        $this->terminal= new BerAirportTerminal();
        $this->tower=new BerAirportTower();
        $this->position=new Sky();
    }
}

