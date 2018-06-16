<?php
namespace interfaces\model\data\material\building\gate;

use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use interfaces\model\data\collection\GuestCollectionInterface;
use interfaces\model\data\material\building\BuildingInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GateInterface extends BuildingInterface
{

    public function getPlane(): ?PlaneInterface;

    public function setPlane(PlaneInterface $plane): void;
    
    /**
     * set the gate visitors
     * @param GuestCollectionInterface $guest
     */
    public function setGuests(GuestCollectionInterface $guest): void;

    /**
     * Get the gate visitors
     * @return GuestCollectionInterface
     */
    public function getGuests(): GuestCollectionInterface;
}
