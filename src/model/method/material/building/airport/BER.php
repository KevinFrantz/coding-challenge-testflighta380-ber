<?php
namespace model\method\material\building\airport;

use model\data\material\building\airport\BER as BEROrigin;
use model\method\material\building\tower\BerAirportTower;
use controller\airport\AirportController;

/**
 *
 * @author kevinfrantz
 *        
 */
class BER extends BEROrigin
{
    public function __construct(){
        parent::__construct();
        $this->tower = new BerAirportTower($this, new AirportController($this));
    }
}

