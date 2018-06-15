<?php
namespace interfaces\model\data\material\building;

use interfaces\model\data\material\vehicle\PlaneInterface;
use interfaces\model\data\collection\GuestCollectionInterface;
use interfaces\model\data\position\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GateInterface extends BuildingInterface
{

    public function getPlane(): ?PlaneInterface;

    public function setPlane(PlaneInterface $plane): void;

    public function setGuests(GuestCollectionInterface $guest): void;

    public function getGuests(): GuestCollectionInterface;

    public function getPosition(): GeoInterface;
}

