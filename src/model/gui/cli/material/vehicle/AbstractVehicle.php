<?php
namespace model\gui\cli\material\vehicle;

use model\gui\cli\material\AbstractMaterial;
use interfaces\model\data\position\PositionInterface;
use interfaces\repository\output\PrintRepositoryInterface;
use interfaces\model\method\action\move\MovingInterface;
use interfaces\model\method\action\move\TargetInterface;
use interfaces\model\method\material\vehicle\VehicleInterface;

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
     * @var string
     */
    protected $initializationMessage = 'Vehicle initialized.';
    
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
    /**
     * @return MovingInterface
     */
    public function getMovingElement(): MovingInterface
    {
        $this->repository->addOutput('Request moving element.');
        return $this->origin->getMovingElement();
    }

    /**
     * @param TargetInterface $target
     */
    public function moveTo(TargetInterface $target): void
    {
        $this->repository->addOutput('Move Requested.');
        $this->origin->moveTo($target);
    }

}

