<?php
namespace model\gui\cli\material\vehicle\plane;

use model\data\collection\PassengerCollection;
use model\gui\cli\material\vehicle\AbstractVehicle;
use interfaces\controller\move\MoveControllerInterface;
use interfaces\model\data\material\person\PilotInterface;
use interfaces\model\method\material\vehicle\plane\PlaneInterface;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Plane extends AbstractVehicle implements PlaneInterface
{
    /**
     * @var PlaneInterface
     */
    protected $origin;
    
    /**
     * @var string
     */
    protected $initializationMessage = 'Plane created';
    
    /**
     * @param PlaneInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(PlaneInterface $origin, ?PrintRepositoryInterface $repository=null){
        parent::__construct($origin, $repository);    
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\plane\PlaneInterface::getPassengers()
     */
    public function getPassengers(): PassengerCollection
    {
        $this->repository->addOutput('Passengers requested.');
        return $this->origin->getPassengers();
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\plane\PlaneInterface::setPassengers()
     */
    public function setPassengers(PassengerCollection $passengers): void
    {
        $this->repository->addOutput('Set passengers.');
        $this->origin->setPassengers($passengers);
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\plane\PlaneInterface::setPilot()
     */
    public function setPilot($pilot): void
    {
        $this->repository->addOutput('Set pilot.');
        $this->origin->setPilot($pilot);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\plane\PlaneInterface::getPilot()
     */
    public function getPilot(): PilotInterface
    {
        $this->repository->addOutput('Pilot requested.');
        return $this->origin->getPilot();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\material\vehicle\plane\PlaneInterface::setMoveController()
     */
    public function setMoveController(MoveControllerInterface $controller): void
    {
        $this->repository->addVarOutput('Plane changes movement controller to: {0}', [(new \ReflectionClass($controller))->getShortName()]);
        $this->origin->setMoveController($controller);   
    }
}

