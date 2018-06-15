<?php
namespace interfaces\model\data\material\vehicle;

use interfaces\model\data\position\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface CarInterface
{
    public function getPosition():GeoInterface;
    public function setPosition(GeoInterface $geo):void;
}

