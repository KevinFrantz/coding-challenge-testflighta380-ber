<?php
namespace model\method\material\building\airport;

use controller\airport\AirportController;
use model\method\material\building\AbstractBuilding;
use model\method\material\building\tower\AirportTower;
use interfaces\model\data\material\building\airport\AirportInterface as DataAirportInterface;
use interfaces\model\method\material\building\airport\AirportInterface;
use interfaces\model\data\collection\RunwayCollectionInterface;
use interfaces\model\data\material\building\TerminalInterface;
use interfaces\model\data\collection\GateCollectionInterface;
use interfaces\model\data\material\building\tower\AirportTowerInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Airport extends AbstractBuilding implements AirportInterface
{   
    /**
     * @var DataAirportInterface
     */
    protected $origin;
    
    /**
     * @param DataAirportInterface $origin
     */
    public function __construct(DataAirportInterface $origin){
        $this->tower = new AirportTower($this->origin, $this, new AirportController($this));
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getRunways()
     */
    public function getRunways(): RunwayCollectionInterface{
        return $this->origin->getRunways();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getTerminal()
     */
    public function getTerminal(): TerminalInterface{
        return $this->origin->getTerminal();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getGates()
     */
    public function getGates(): GateCollectionInterface{
        return $this->origin->getGates();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getTower()
     */
    public function getTower(): AirportTowerInterface{
        return $this->getTower();
    }
}

