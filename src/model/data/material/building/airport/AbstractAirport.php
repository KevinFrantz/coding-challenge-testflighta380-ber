<?php
namespace model\data\material\building\airport;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\airport\AirportInterface;
use interfaces\model\data\material\building\TerminalInterface;
use interfaces\model\data\material\building\TowerInterface;
use interfaces\model\data\collection\GateCollectionInterface;
use interfaces\model\data\collection\RunwayCollectionInterface;
use interfaces\model\data\position\SkyInterface;
use interfaces\model\data\material\building\airport\attribute\NameInterface;
use model\data\material\building\airport\attribute\Name;

abstract class AbstractAirport extends AbstractBuilding implements AirportInterface
{
    /**
     * @var TerminalInterface
     */
    protected $terminal;

    /**
     * @var TowerInterface
     */
    protected $tower;

    /**
     * @var RunwayCollectionInterface
     */
    protected $runways;

    /**
     * @var GateCollectionInterface
     */
    protected $gates;

    /**
     * @var NameInterface
     */
    protected $name;
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getTerminal()
     */
    public function getTerminal(): TerminalInterface
    {
        return $this->terminal;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getTower()
     */
    public function getTower(): TowerInterface
    {
        return $this->tower;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getGates()
     */
    public function getGates(): GateCollectionInterface
    {
        return $this->gates;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getRunways()
     */
    public function getRunways(): RunwayCollectionInterface
    {
        return $this->runways;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\airport\AirportInterface::getPosition()
     */
    public function getPosition(): SkyInterface
    {
        return $this->position;
    }
    
    /**
     * {@inheritDoc}
     * @see \model\data\material\AbstractMaterialModel::getName()
     */
    public function getName():string{
        return $this->name->getFullname();
    }
    
    /**
     * {@inheritDoc}
     * @see \model\data\material\AbstractMaterialModel::setName()
     * @todo Implement the setting of iata and icao! It work's but it should work better!
     */
    public function setName(string $name):void{
       $this->name = new Name();
       $this->name->setName($name);
    }
}

