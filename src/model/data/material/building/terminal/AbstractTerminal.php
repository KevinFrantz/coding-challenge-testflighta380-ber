<?php
namespace model\data\material\building\terminal;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\TerminalInterface;
use interfaces\model\data\position\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractTerminal extends AbstractBuilding implements TerminalInterface{
    public function getPosition(): GeoInterface
    {
        return $this->position;
    }
}

