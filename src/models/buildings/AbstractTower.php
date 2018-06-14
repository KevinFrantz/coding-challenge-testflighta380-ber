<?php
namespace models\buildings;

use models\AbstractBuilding;
use interfaces\models\buildings\TowerInterface;
use interfaces\models\positions\SkyInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractTower extends AbstractBuilding implements TowerInterface
{
    public function getPosition(): SkyInterface
    {
        return $this->position;
    }
}

