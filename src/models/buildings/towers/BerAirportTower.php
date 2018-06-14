<?php
namespace models\buildings\towers;

use models\buildings\AbstractTower;
use models\positions\Sky;

/**
 *
 * @author kevinfrantz
 *        
 */
final class BerAirportTower extends AbstractTower
{
    public function __construct(){
        $this->position = new Sky();
    }
}

