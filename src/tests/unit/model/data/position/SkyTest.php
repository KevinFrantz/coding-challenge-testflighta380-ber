<?php
namespace tests\unit\model\data\position;

use model\data\position\Sky;

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
        $this->position->setHightOverSealevelInMeters(100.0);
        $this->assertEquals(100.0, $this->position->getHightOverSealevelInMeters());
    }
}

