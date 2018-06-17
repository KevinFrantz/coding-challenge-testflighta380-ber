<?php
namespace model\gui\cli\material\vehicle\car;

use interfaces\model\data\material\vehicle\car\AircraftTractorInterface as DataAircraftTractorInterface;
use interfaces\model\method\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use model\gui\cli\material\vehicle\AbstractVehicle;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
final class AircraftTractor extends AbstractVehicle implements AircraftTractorInterface
{
    /**
     * @var DataAircraftTractorInterface
     */
    protected $origin;
    
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
        $this->repository->addOutput('Plane '.$plane->getName().' hooked in too '.$this->origin->getName());
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

