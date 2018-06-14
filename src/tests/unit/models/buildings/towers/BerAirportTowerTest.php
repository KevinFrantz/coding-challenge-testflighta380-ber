<?php
namespace tests\unit\models\buildings\towers;

use PHPUnit\Framework\TestCase;
use models\buildings\towers\BerAirportTower;
use models\virtual\permissions\PermissionToLand;
use models\vehicles\planes\A380;

/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportTowerTest extends TestCase
{
    /**
     * @var BerAirportTower
     */
    private $berAirportTower;
    
    protected function setUp():void{
       $this->berAirportTower = new BerAirportTower();
    }
}

