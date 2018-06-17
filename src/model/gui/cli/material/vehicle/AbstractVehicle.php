<?php
namespace model\gui\cli\material\vehicle;

use model\gui\cli\material\AbstractMaterial;
use interfaces\model\data\material\vehicle\VehicleInterface;
use interfaces\model\data\position\PositionInterface;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractVehicle extends AbstractMaterial implements VehicleInterface
{
    /**
     * @var VehicleInterface
     */
    protected $origin;
    
    /**
     * @param VehicleInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(VehicleInterface $origin, ?PrintRepositoryInterface $repository=NULL){
        parent::__construct($origin, $repository);
    }
    
    /**
     * @param PositionInterface $position
     */
    public function setPosition(PositionInterface $position): void
    {
        $this->repository->addOutput('Set Position for '.$this->origin->getName().'.');
        $this->origin->setPosition($position);
    }
}

