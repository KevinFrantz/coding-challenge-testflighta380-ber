<?php
namespace model\method\material\building\terminal;

use model\data\material\building\terminal\BerAirportTerminal as BerAirportTerminalOrigin;
use interfaces\model\method\move\TargetInterface;
use model\method\traits\TargetPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportTerminal extends BerAirportTerminalOrigin implements TargetInterface
{
    use TargetPosition;
}

