<?php
namespace model\gui\cli\material\vehicle\car;

use interfaces\model\data\material\vehicle\car\AircraftTractorInterface as DataAircraftTractorInterface;
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
     * @var DataAircraftTractorInterface
     */
    protected $origin;
    
    /**
     * @var string
     */
    protected $initializationMessage = 'Aircraft tractor initialized.';
    
    /**
     * @param DataAircraftTractorInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(DataAircraftTractorInterface $origin, ?PrintRepositoryInterface$repository=NULL){
        parent::__construct($origin, $repository);
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\car\AircraftTractorInterface::setPlane()
     */
    public function setPlane(PlaneInterface $plane): void
    {
        $this->repository->addOutput('Plane hooked in to aircraft tractor.');
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\car\AircraftTractorInterface::getPlane()
     */
    public function getPlane(): ?PlaneInterface
    {
        $plane = $this->origin->getPlane();
        $this->repository->addOutput('Plane '.$plane->getName().' requested.');
        return $plane;
    }
}

