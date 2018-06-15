<?php
namespace model\data\material\building\gate;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\GateInterface;
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
    protected $plane;
    
    protected $guests;
    
    public function __construct(){
        $this->guests = new GuestCollection();   
    }
    
    public function setPlane(PlaneInterface $plane): void
    {
        $this->plane = $plane;
    }

    public function setGuests(GuestCollectionInterface $guests): void
    {
        $this->guests = $guests;
    }

    public function getPlane(): ?PlaneInterface
    {
        return $this->plane;
    }

    public function getGuests(): GuestCollectionInterface
    {
        return $this->guests;
    }
    public function getPosition(): GeoInterface
    {
        return $this->position;
    }
}

