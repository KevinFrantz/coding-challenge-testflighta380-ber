<?php
namespace model\data\material\building\tower;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\TowerInterface;
use interfaces\model\data\position\SkyInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractTower extends AbstractBuilding implements TowerInterface
{
    public function getPosition(): SkyInterface
    {
        return $this->position;
    }
}

