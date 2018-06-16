<?php
namespace model\data\material\building\gate;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\gate\GateInterface;
use interfaces\model\data\collection\GuestCollectionInterface;
use interfaces\model\data\position\GeoInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use model\data\collection\GuestCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractGate extends AbstractBuilding implements GateInterface
{
    /**
     * @var PlaneInterface
     */
    protected $plane;
    
    /**
     * @var GuestCollectionInterface
     */
    protected $guests;
    
    /**
     * @param string $name
     */
    public function __construct(string $name){
        $this->guests = new GuestCollection(); 
        $this->name = $name;
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\gate\GateInterface::setPlane()
     */
    public function setPlane(PlaneInterface $plane): void
    {
        $this->plane = $plane;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\gate\GateInterface::setGuests()
     */
    public function setGuests(GuestCollectionInterface $guests): void
    {
        $this->guests = $guests;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\gate\GateInterface::getPlane()
     */
    public function getPlane(): ?PlaneInterface
    {
        return $this->plane;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\gate\GateInterface::getGuests()
     */
    public function getGuests(): GuestCollectionInterface
    {
        return $this->guests;
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\gate\GateInterface::getPosition()
     */
    public function getPosition(): GeoInterface
    {
        return $this->position;
    }
}

