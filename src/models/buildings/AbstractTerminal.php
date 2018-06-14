<?php
namespace models\buildings;

use models\AbstractBuilding;
use interfaces\models\buildings\TerminalInterface;
use interfaces\models\positions\GeoInterface;

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

