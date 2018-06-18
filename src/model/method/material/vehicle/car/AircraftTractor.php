<?php
namespace model\method\material\vehicle\car;

use interfaces\model\method\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use interfaces\model\method\action\move\TargetInterface;
use model\method\material\vehicle\plane\Plane;
use controller\move\DriveController;

/**
 *
 * @author kevinfrantz
 *        
 */
class AircraftTractor extends Car implements AircraftTractorInterface
{
    /**
     * @var AircraftTractorInterface
     */
    protected $origin;
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\car\AircraftTractorInterface::setPlane()
     */
    public function setPlane(PlaneInterface $plane): void
    {
        $this->origin->setPlane($plane);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\vehicle\car\AircraftTractorInterface::getPlane()
     */
    public function getPlane(): ?PlaneInterface
    {
        return $this->origin->getPlane();
    }
    
    /**
     * @param TargetInterface $target
     */
    public function moveTo(TargetInterface $target): void
    {
        $this->moveController->moveTo($target);
        if($this->hasPlane()){
            $plane = new Plane($this->origin->getPlane());
            $plane->setMoveController(new DriveController($plane));
            $plane->moveTo($target);
        }
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\material\vehicle\car\AircraftTractorInterface::hasPlane()
     */
    public function hasPlane(): bool
    {
        try{
            return ($this->getPlane() instanceof PlaneInterface);   
        }catch(\Exception $exception){
            return false;
        }
    }
}

