<?php
namespace model\method\material\building\tower;

use interfaces\controller\airport\AirportControllerInterface;
use interfaces\model\data\material\building\gate\GateInterface;
use interfaces\model\data\material\building\RunwayInterface;
use controller\airport\AirportController;
use interfaces\model\data\material\building\airport\AirportInterface;
use interfaces\model\data\material\building\TowerInterface;
use model\method\material\building\AbstractBuilding;

/**
 *
 * @author kevinfrantz
 *        
 */
class AirportTower extends AbstractBuilding implements AirportControllerInterface
{
    /**
     * This Tower is acting as the airport controller because it's descriped like this in the task ;)
     * @var AirportControllerInterface
     */
    protected $airportController;
    
    /**
     * @param TowerInterface $tower
     * @param AirportInterface $airport
     * @param AirportController $airportController
     */
    public function __construct(TowerInterface $tower, AirportInterface $airport, AirportController $airportController){
        parent::__construct($airport);
        $this->airportController = $airportController;
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\controller\airport\AirportControllerInterface::getPermissionToLand()
     */
    public function getPermissionToLand(): bool
    {
        return $this->airportController->getPermissionToLand();
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\controller\airport\AirportControllerInterface::getFreeRunway()
     */
    public function getFreeRunway(): RunwayInterface
    {
        return $this->airportController->getFreeRunway();
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\controller\airport\AirportControllerInterface::getFreeGate()
     */
    public function getFreeGate(): GateInterface
    {
        return $this->airportController->getFreeGate();   
    }
}

