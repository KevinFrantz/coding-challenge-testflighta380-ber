<?php
namespace interfaces\models\positions;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GeoInterface
{
    public function getLatitude():float;
    
    public function getLongitute():float;
}

