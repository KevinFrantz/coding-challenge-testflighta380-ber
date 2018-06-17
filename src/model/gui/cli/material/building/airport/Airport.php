<?php
namespace model\gui\cli\material\building\airport;

use model\gui\cli\material\building\AbstractBuilding;
use interfaces\model\data\collection\GateCollectionInterface;
use interfaces\model\data\collection\RunwayCollectionInterface;
use interfaces\model\data\material\building\TerminalInterface;
use interfaces\model\data\material\building\tower\AirportTowerInterface;
use interfaces\model\method\material\building\airport\AirportInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Airport extends AbstractBuilding implements AirportInterface
{
    /**
     * @var AirportInterface
     */
    protected $origin;
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getTerminal()
     */
    public function getTerminal(): TerminalInterface
    {
       $this->repository->addOutput('Terminal name requested.');
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
        return $this->origin->getTower();
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getRunways()
     */
    public function getRunways(): RunwayCollectionInterface
    {
        $this->repository->addOutput('Runway requested.');
    }
}