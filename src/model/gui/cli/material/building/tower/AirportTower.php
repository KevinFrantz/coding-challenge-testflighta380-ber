<?php
namespace model\gui\cli\material\building\tower;

use interfaces\model\data\material\building\RunwayInterface;
use interfaces\model\data\material\building\gate\GateInterface;
use model\gui\cli\material\building\AbstractBuilding;
use interfaces\model\method\material\building\tower\AirportTowerInterface;
use model\gui\AbstractGui;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AirportTower extends AbstractBuilding implements AirportTowerInterface
{
    /**
     * @var AirportTowerInterface
     */
    protected $origin;
    
    /**
     * @param AirportTowerInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(AirportTowerInterface $origin, ?PrintRepositoryInterface $repository=Null){
        parent::__construct($origin,$repository);
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\controller\airport\AirportControllerInterface::getPermissionToLand()
     */
    public function getPermissionToLand(): bool
    {
        $this->repository->addOutput('Permission to land requested.');
        return $this->origin->getPermissionToLand();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\controller\airport\AirportControllerInterface::getFreeRunway()
     */
    public function getFreeRunway(): RunwayInterface
    {
        $this->repository->addOutput('Free runway requested.');
        return $this->origin->getFreeRunway();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\controller\airport\AirportControllerInterface::getFreeGate()
     */
    public function getFreeGate(): GateInterface
    {
        $this->repository->addOutput('Free gate requested.');
        return $this->origin->getGate();
    }
}

