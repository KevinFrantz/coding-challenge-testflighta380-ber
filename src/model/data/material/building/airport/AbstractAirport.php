<?php
namespace model\data\material\building\airport;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\AirportInterface;
use interfaces\model\data\material\building\TerminalInterface;
use interfaces\model\data\material\building\TowerInterface;
use interfaces\model\data\collection\GateCollectionInterface;
use interfaces\model\data\collection\RunwayCollectionInterface;
use interfaces\model\data\position\SkyInterface;

abstract class AbstractAirport extends AbstractBuilding implements AirportInterface
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

    public function getPosition(): SkyInterface
    {
        return $this->position;
    }
}

