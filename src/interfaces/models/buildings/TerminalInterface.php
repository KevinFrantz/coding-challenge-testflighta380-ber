<?php
namespace interfaces\models\buildings;

use interfaces\models\positions\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface TerminalInterface
{
    public function getPosition():GeoInterface;
}

