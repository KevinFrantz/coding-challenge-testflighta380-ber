<?php
namespace model\gui\cli\material\building\tower;

use model\method\material\building\tower\BerAirportTower as BerAirportTowerOrigin;
use interfaces\model\data\material\building\RunwayInterface;
use interfaces\model\data\material\building\gate\GateInterface;
/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportTower extends BerAirportTowerOrigin
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

