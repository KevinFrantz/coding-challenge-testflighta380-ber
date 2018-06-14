<?php
namespace models\buildings\terminals;

use models\buildings\AbstractTerminal;
use models\positions\Geo;

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

