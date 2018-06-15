<?php
namespace model\method\material\building\airport;

use model\data\material\building\airport\BER as BEROrigin;
use model\method\material\building\tower\BerAirportTower;
use controller\airport\AirportController;
use interfaces\model\method\move\TargetInterface;
use model\method\traits\TargetPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
class BER extends BEROrigin implements TargetInterface
{
    use TargetPosition;
    
    public function __construct(){
        parent::__construct();
        $this->tower = new BerAirportTower($this, new AirportController($this));
    }
}

