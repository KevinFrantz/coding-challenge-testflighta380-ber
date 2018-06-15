<?php
namespace model\data\material\building\runway;

use model\data\position\Sky;

/**
 *
 * @author kevinfrantz
 *        
 */
final class BerAirportRunway2 extends AbstractRunway
{
    public function __construct(){
        $this->position = new Sky(13.02,53.02,0.0);
    }
}

