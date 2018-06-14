<?php
namespace interfaces\models\buildings;

use interfaces\models\collections\GateCollectionInterface;
use interfaces\models\collections\RunwayCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface AirportInterface
{
    public function getRunways():RunwayCollectionInterface;
    
    public function getTerminal():TerminalInterface;
    
    public function getGates():GateCollectionInterface;
    
    public function getTower():TowerInterface;
}

