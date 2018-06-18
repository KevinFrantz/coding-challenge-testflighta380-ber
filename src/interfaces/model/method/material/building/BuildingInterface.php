<?php
namespace interfaces\model\method\material\building;

use interfaces\model\method\action\move\TargetInterface;
use interfaces\model\data\material\building\BuildingInterface as DataBuildingInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface BuildingInterface extends TargetInterface, DataBuildingInterface
{}

