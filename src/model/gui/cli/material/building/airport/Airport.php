<?php
namespace model\gui\cli\material\building\airport;

use model\gui\cli\material\building\AbstractBuilding;
use interfaces\model\data\collection\GateCollectionInterface;
use interfaces\model\data\collection\RunwayCollectionInterface;
use interfaces\model\data\material\building\TerminalInterface;
use interfaces\model\data\material\building\tower\AirportTowerInterface;
use interfaces\model\method\material\building\tower\AirportTowerInterface as MethodAirportTower;
use interfaces\model\method\material\building\airport\AirportInterface;
use interfaces\repository\output\PrintRepositoryInterface;
use model\gui\cli\material\building\tower\AirportTower;

/**
 *
 * @author kevinfrantz
 *        
 */
class Airport extends AbstractBuilding implements AirportInterface
{
    /**
     * @var string
     */
    protected $initializationMessage = 'Airport created';
    
    /**
     * @var AirportInterface
     */
    protected $origin;
    
    /**
     * @var MethodAirportTower
     */
    protected $tower;
    
    /**
     * @param AirportInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(AirportInterface $origin,?PrintRepositoryInterface $repository = NULL){
        parent::__construct($origin,$repository);
        $this->tower = new AirportTower($origin->getTower(),$repository);
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getTerminal()
     */
    public function getTerminal(): TerminalInterface
    {
       $this->repository->addOutput('Terminal requested.');
       return $this->origin->getTerminal();  
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getGates()
     */
    public function getGates(): GateCollectionInterface
    {
        $this->repository->addOutput('Gates requested.');
        return $this->origin->getGates();
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getTower()
     */
    public function getTower(): AirportTowerInterface
    {
        $this->repository->addOutput('Tower requested.');
        return $this->tower;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getRunways()
     */
    public function getRunways(): RunwayCollectionInterface
    {
        $this->repository->addOutput('Runway requested.');
        return $this->origin->getRunways();
    }
}