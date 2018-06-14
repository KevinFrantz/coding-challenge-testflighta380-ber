<?php
namespace models\buildings\runways;

use models\buildings\AbstractRunway;
use models\positions\Sky;

/**
 *
 * @author kevinfrantz
 *        
 */
final class BerAirportRunway2 extends AbstractRunway
{
    public function __construct(){
        $this->position = new Sky();
    }
}

