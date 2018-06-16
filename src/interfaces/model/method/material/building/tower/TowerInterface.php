<?php
namespace interfaces\model\method\material\building\tower;

use interfaces\model\data\material\building\TowerInterface as DataTowerInterface;
use interfaces\model\method\material\building\BuildingInterface;
use interfaces\controller\airport\AirportControllerInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TowerInterface extends DataTowerInterface, BuildingInterface, AirportControllerInterface
{
}

