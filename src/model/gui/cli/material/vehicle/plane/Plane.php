<?php
namespace model\gui\cli\material\vehicle\plane;

use model\data\collection\PassengerCollection;
use model\gui\cli\material\vehicle\AbstractVehicle;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
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
    
    public function __construct(PlaneInterface $origin, ?PrintRepositoryInterface $repository){
        parent::__construct($origin, $repository);    
    }
    
    public function getPassengers(): PassengerCollection
    {
        $this->repository->addOutput('Passengers for '.$this->origin->getName().' requested.');
        return $this->origin->getPassengers();
    }

    public function setPassengers(PassengerCollection $passengers): void
    {
        $this->repository->addOutput('Set Passengers for '.$this->origin->getName().'.');
        $this->origin->setPassengers($passengers);
    }
}

