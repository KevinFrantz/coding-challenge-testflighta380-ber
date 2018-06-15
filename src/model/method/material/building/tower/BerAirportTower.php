<?php
namespace model\method\material\building\tower;

use model\data\material\building\tower\BerAirportTower as BerAirportTowerOrigin;
use interfaces\controller\aiport\AirportControllerInterface;
use interfaces\model\data\material\building\GateInterface;
use interfaces\model\data\material\building\RunwayInterface;
use controller\airport\AirportController;
use interfaces\model\data\material\building\AirportInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportTower extends BerAirportTowerOrigin implements AirportControllerInterface
{
    /**
     * This Tower is acting as the airport controller because it's descriped like this in the task ;)
     * @var AirportControllerInterface
     */
    protected $airportController;
    
    public function __construct(AirportInterface $airport, AirportController $airportController){
        parent::__construct($airport);
        $this->airportController = $airportController;
    }
    
    public function getPermissionToLand(): bool
    {
        return $this->airportController->getPermissionToLand();
    }

    public function getFreeRunway(): RunwayInterface
    {
        return $this->airportController->getFreeRunway();
    }

    public function getFreeGate(): GateInterface
    {
        return $this->getFreeGate();   
    }
}

