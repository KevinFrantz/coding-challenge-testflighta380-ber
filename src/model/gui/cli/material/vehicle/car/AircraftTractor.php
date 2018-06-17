<?php
namespace model\gui\cli\material\vehicle\car;

use interfaces\model\method\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
final class AircraftTractor extends Car implements AircraftTractorInterface
{
    /**
     * @var AircraftTractorInterface
     */
    protected $origin;
    
    /**
     * @var string
     */
    protected $initializationMessage = 'Aircraft tractor initialized.';
    
    /**
     * @param AircraftTractorInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(AircraftTractorInterface $origin, ?PrintRepositoryInterface$repository=NULL){
        parent::__construct($origin, $repository);
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\car\AircraftTractorInterface::setPlane()
     */
    public function setPlane(PlaneInterface $plane): void
    {
        $this->repository->addVarOutput('Plane "{0}" hooked in to aircraft tractor "{1}".',[$plane->getName(),$this->origin->getName()]);
        $this->origin->setPlane($plane);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\car\AircraftTractorInterface::getPlane()
     */
    public function getPlane(): ?PlaneInterface
    {
        $plane = $this->origin->getPlane();
        $this->repository->addVarOutput('Plane "{0}" from aircraft tractor "{1}" requested.',[$plane->getName(),$this->origin->getName()]);
        return $plane;
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\material\vehicle\car\AircraftTractorInterface::hasPlane()
     */
    public function hasPlane(): bool
    {
        $this->repository->addVarOutput('Requested if plane is hooked in aircraft tractor "{0}".', [$this->origin->getName()]);
        return $this->origin->hasPlane();
    }
}

