<?php
namespace model\method\material\building;

use model\method\material\AbstractMaterial;
use model\data\position\AbstractPosition;
use interfaces\model\data\material\building\BuildingInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractBuilding extends AbstractMaterial implements BuildingInterface
{
    /**
     * @var BuildingInterface
     */
    protected $origin;
}

