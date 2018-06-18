<?php
namespace model\data\material\building\runway;

use model\data\position\Sky;
use model\data\collection\VehicleCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportRunway2 extends AbstractRunway
{
    public function __construct(){
        $this->position = new Sky(13.02,53.02,0.0);
        $this->vehicles = new VehicleCollection();
        $this->name = "2";
    }
}

