<?php
namespace tests\unit\models\positions;

use PHPUnit\Framework\TestCase;
use models\positions\Geo;

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
        $this->position->setLatitude();
        $latitude = $this->position->getLatitude();
        $this->assertGreaterThanOrEqual(-90.0, $latitude);
        $this->assertGreaterThanOrEqual($latitude, 90.0);
    }
    
    public function testLongitute():void{
        $this->position->setLongitute();
        $longitute = $this->position->getLongitute();
        $this->assertGreaterThanOrEqual(-180.0, $longitute);
        $this->assertGreaterThanOrEqual($longitute, 180.0);
    }
}

