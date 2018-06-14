<?php
namespace models\buildings\gates;

use models\buildings\AbstractGate;
use models\positions\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
final class BerAirportGate1 extends AbstractGate
{
    public function __construct(){
        $this->position = new Geo();
    }
}

