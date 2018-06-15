<?php
namespace interfaces\model\data\position;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GeoInterface
{
    public function setLatitude(float $latitude):void;
    
    public function setLongitude(float $longitude):void;
    
    public function getLatitude():float;
    
    public function getLongitude():float;
}

