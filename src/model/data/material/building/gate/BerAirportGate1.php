<?php
namespace model\data\material\building\gate;

use model\data\position\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
final class BerAirportGate1 extends AbstractGate
{
    public function __construct(){
        $this->position = new Geo(13.01,52.01);
        $this->name = "1";
    }
}

