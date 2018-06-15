<?php
namespace interfaces\model\data\material\building;

use interfaces\model\data\collection\GateCollectionInterface;
use interfaces\model\data\collection\RunwayCollectionInterface;
use interfaces\model\data\position\SkyInterface;

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

