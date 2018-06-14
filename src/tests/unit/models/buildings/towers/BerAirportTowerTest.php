<?php
namespace tests\unit\models\buildings\towers;

use PHPUnit\Framework\TestCase;
use models\buildings\towers\BerAirportTower;
use models\positions\Sky;


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
    
    /**
     * So that also the planes in future versions of the programm now where they shouldn't fly ;) 
     */
    public function testPositionAccessor():void{
        $this->assertInstanceOf(Sky::class,$this->berAirportTower->getPosition());
    }
}

