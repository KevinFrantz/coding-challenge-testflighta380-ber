<?php
namespace tests\unit\model\data\material\building\tower;

use PHPUnit\Framework\TestCase;
use model\data\material\building\tower\BerAirportTower;
use model\data\position\Sky;


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

