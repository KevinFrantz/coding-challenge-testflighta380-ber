<?php
namespace model\gui\cli\material\vehicle\car;

use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use model\gui\cli\material\vehicle\AbstractVehicle;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AircraftTractor extends AbstractVehicle implements AircraftTractorInterface
{
    /**
     * @var AircraftTractorInterface
     */
    protected $origin;
    
    public function __construct(AircraftTractorInterface $origin, ?PrintRepositoryInterface$repository){
        parent::__construct($origin, $repository);    
    }
    
    public function setPlane(PlaneInterface $plane): void
    {
        $this->repository->addOutput('Plane '.$plane->getName().' hooked in too '.$this->origin->getName());
    }

    public function getPlane(): ?PlaneInterface
    {
        $plane = $this->origin->getPlane();
        $this->repository->addOutput('Plane '.$plane->getName().' requested.');
        return $plane;
    }
}

