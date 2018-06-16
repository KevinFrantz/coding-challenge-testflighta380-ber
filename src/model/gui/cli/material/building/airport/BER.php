<?php
namespace model\gui\cli\material\building\airport;

use model\method\material\building\airport\BER as BerOrigin;
use model\gui\cli\material\building\tower\BerAirportTower;
use controller\airport\AirportController;

/**
 *
 * @author kevinfrantz
 *        
 */
class BER extends BerOrigin
{

    public function __construct()
    {
        parent::__construct();
        $this->tower = new BerAirportTower($this, new AirportController($this));
    }
}

