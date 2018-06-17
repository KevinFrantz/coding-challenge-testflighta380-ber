<?php
namespace model\gui\cli\material\vehicle\plane;

use model\data\collection\PassengerCollection;
use model\gui\cli\material\vehicle\AbstractVehicle;
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
        $this->repository->addOutput('Set Passengers.');
        $this->origin->setPassengers($passengers);
    }
}

