<?php
namespace interfaces\model\data\material\building\airport;

use interfaces\model\data\collection\GateCollectionInterface;
use interfaces\model\data\collection\RunwayCollectionInterface;
use interfaces\model\data\position\SkyInterface;
use interfaces\model\data\material\building\BuildingInterface;
use interfaces\model\data\material\building\TerminalInterface;
use interfaces\model\data\material\building\TowerInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface AirportInterface extends BuildingInterface
{

    public function getRunways(): RunwayCollectionInterface;

    public function getTerminal(): TerminalInterface;

    public function getGates(): GateCollectionInterface;

    public function getTower(): TowerInterface;

    public function getPosition(): SkyInterface;
}

