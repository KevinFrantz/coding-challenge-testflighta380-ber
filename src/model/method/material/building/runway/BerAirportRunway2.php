<?php
namespace model\method\material\building\runway;

use model\data\material\building\runway\BerAirportRunway2 as BerAirportRunway2Origin;
use interfaces\model\method\move\TargetInterface;
use model\data\position\Geo;
use model\method\traits\TargetPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportRunway2 extends BerAirportRunway2Origin implements TargetInterface
{
    use TargetPosition;
}

