<?php
namespace interfaces\models\vehicles;

use interfaces\models\positions\SkyInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface PlaneInterface
{
    public function getPosition():SkyInterface;
}

