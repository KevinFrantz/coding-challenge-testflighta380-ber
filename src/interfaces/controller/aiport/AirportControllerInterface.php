<?php
namespace interfaces\controller\aiport;

use interfaces\controller\ControllerInterface;
use interfaces\model\data\material\building\RunwayInterface;
use interfaces\model\data\material\building\GateInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface AirportControllerInterface extends ControllerInterface
{
    public function getFreeRunway(): RunwayInterface;
    
    public function getPermissionToLand():bool;
    
    public function getFreeGate():GateInterface;
}

