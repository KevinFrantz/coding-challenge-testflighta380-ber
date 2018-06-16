<?php
namespace model\method\material\building\airport;

use controller\airport\AirportController;
use model\method\material\building\AbstractBuilding;
use model\method\material\building\tower\AirportTower;
use model\data\material\building\airport\AbstractAirport;

/**
 *
 * @author kevinfrantz
 *        
 */
class Airport extends AbstractBuilding
{   
    /**
     * @param AbstractAirport $origin
     */
    public function __construct(AbstractAirport $origin){
        $this->tower = new AirportTower($this->origin, $this, new AirportController($this));
    }
}

