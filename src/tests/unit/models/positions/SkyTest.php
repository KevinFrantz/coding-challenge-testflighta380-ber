<?php
namespace tests\unit\models\positions;

use models\positions\Sky;

/**
 *
 * @author kevinfrantz
 *        
 */
class SkyTest extends GeoTest
{
    protected function setUp():void{
        $this->position = new Sky();    
    }
    
    public function testHight():void{
        $this->position->setHigh(100.0);
        $this->assertEquals(100.0, $this->position->getHigh());
    }
}

