<?php
namespace interfaces\model\method\material\vehicle;

use interfaces\model\method\material\MaterialInterface;
use interfaces\model\data\material\vehicle\VehicleInterface as DataVehicleInterface;
use interfaces\model\method\action\move\MovingInterface;
use interfaces\controller\move\MoveControllerInterface;
/**
 * Vehicles contain and represent a data object.
 * Also a vehicle acts everytime as a moving controller  
 * @author kevinfrantz
 *        
 */
interface VehicleInterface extends MaterialInterface, MovingInterface,DataVehicleInterface,MoveControllerInterface
{
}

