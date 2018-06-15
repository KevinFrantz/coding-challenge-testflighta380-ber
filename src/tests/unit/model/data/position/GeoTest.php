<?php
namespace tests\unit\model\data\position;

use PHPUnit\Framework\TestCase;
use model\data\position\Geo;

/**
 *
 * @author kevinfrantz
 *        
 */
class GeoTest extends TestCase
{
    protected $position;
    
    protected function setUp():void{
        $this->position = new Geo();    
    }
    
    public function testLatitude():void{
        $this->position->setLatitude(80);
        $latitude = $this->position->getLatitude();
        $this->assertGreaterThanOrEqual(-90.0, $latitude);
        $this->assertGreaterThanOrEqual($latitude, 90.0);
    }
    
    public function testLongitute():void{
        $this->position->setLongitude(80);
        $longitute = $this->position->getLongitude();
        $this->assertGreaterThanOrEqual(-180.0, $longitute);
        $this->assertGreaterThanOrEqual($longitute, 180.0);
    }
}

