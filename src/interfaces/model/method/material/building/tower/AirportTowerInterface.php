<?php
namespace interfaces\model\method\material\building\tower;

use interfaces\controller\airport\AirportControllerInterface;
use interfaces\model\data\material\building\tower\AirportTowerInterface as DataAirportTowerInterface;
/**
 *
 * @author kevinfrantz
 *        
 */
interface AirportTowerInterface extends AirportControllerInterface, TowerInterface,DataAirportTowerInterface
{
}

