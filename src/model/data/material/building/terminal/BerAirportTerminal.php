<?php
namespace model\data\material\building\terminal;

use model\data\position\Geo;
use interfaces\model\data\material\building\airport\AirportInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportTerminal extends AbstractTerminal
{
    public function __construct(AirportInterface $airport){
        parent::__construct($airport);
        $this->position = new Geo(13.03,53.03,0.0);
    }
}

