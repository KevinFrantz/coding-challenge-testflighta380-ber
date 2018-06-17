<?php
namespace interfaces\model\method\material\vehicle;

use interfaces\model\method\material\MaterialInterface;
use interfaces\model\data\material\vehicle\VehicleInterface as DataVehicleInterface;
use interfaces\model\method\action\move\MovingInterface;
/**
 *
 * @author kevinfrantz
 *        
 */
interface VehicleInterface extends MaterialInterface, MovingInterface,DataVehicleInterface
{
}

