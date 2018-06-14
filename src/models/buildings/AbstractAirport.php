<?php
namespace models\buildings;

use models\AbstractBuilding;
use interfaces\models\buildings\AirportInterface;
use interfaces\models\buildings\TerminalInterface;
use interfaces\models\buildings\TowerInterface;
use interfaces\models\collections\GateCollectionInterface;
use interfaces\models\collections\RunwayCollectionInterface;

class AbstractAirport extends AbstractBuilding implements AirportInterface
{
    protected $terminal;
    
    protected $tower;
    
    protected $runways;
    
    protected $gates;
    
    public function getTerminal(): TerminalInterface
    {
        return $this->terminal;
    }

    public function getTower(): TowerInterface
    {
        return $this->tower;
    }

    public function getGates(): GateCollectionInterface
    {
        return $this->gates;
    }

    public function getRunways(): RunwayCollectionInterface
    {
        return $this->runways;
    }

}

