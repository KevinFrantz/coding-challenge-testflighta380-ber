<?php
namespace model\data\material\building\terminal;

use model\data\position\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
final class BerAirportTerminal extends AbstractTerminal
{
    public function __construct(){
        $this->position = new Geo();
    }
}

