<?php
namespace model\gui\cli\material\building\tower;

use interfaces\model\data\material\building\RunwayInterface;
use interfaces\model\data\material\building\gate\GateInterface;
use model\gui\cli\material\building\AbstractBuilding;
use interfaces\model\method\material\building\tower\TowerInterface;
/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportTower extends AbstractBuilding implements TowerInterface
{
    
    public function getPermissionToLand(): bool
    {
        return parent::getPermissionToLand();
    }
    
    public function getFreeRunway(): RunwayInterface
    {
        return parent::getFreeRunway();
    }
    
    public function getFreeGate(): GateInterface
    {
        return parent::getFreeGate();
    }
}

