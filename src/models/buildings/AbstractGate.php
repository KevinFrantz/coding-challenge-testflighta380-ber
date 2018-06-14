<?php
namespace models\buildings;

use models\AbstractBuilding;
use interfaces\models\buildings\GateInterface;
use interfaces\models\collections\GuestCollectionInterface;
use interfaces\models\vehicles\PlaneInterface;
use models\collections\GuestCollection;

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

}

