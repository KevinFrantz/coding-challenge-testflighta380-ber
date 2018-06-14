<?php
namespace interfaces\models\buildings;

use interfaces\models\positions\SkyInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TowerInterface
{
    public function getPosition():SkyInterface;
}

