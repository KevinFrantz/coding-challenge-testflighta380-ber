<?php
namespace interfaces\models\vehicles;

use interfaces\models\positions\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface CarInterface
{
    public function getPosition():GeoInterface;
}

