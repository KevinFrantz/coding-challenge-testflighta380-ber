<?php
namespace model\data\material\building\tower;

use model\data\position\Sky;
use model\data\material\building\airport\AbstractAirport;

/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportTower extends AbstractTower
{
    public function __construct(AbstractAirport $airport){
        $this->position = new Sky(13.04,53.04,0.0);
        $this->airport = $airport;
    }
}

