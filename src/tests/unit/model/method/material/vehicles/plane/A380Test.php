<?php
namespace tests\unit\model\method\material\vehicles\plane;

use PHPUnit\Framework\TestCase;
use model\method\material\vehicle\plane\A380;
use model\data\position\Sky;

/**
 *
 * @author kevinfrantz
 *        
 */
class A380Test extends TestCase
{
    protected $a380;
    
    protected function setUp(){
        $this->a380 = new A380();
    }
    protected function testMovingInterface(){
        $position = new Sky();
        $this->a380->setMovingPosition($position);
        $this->assertEquals($this->a380->getMovingPosition(), $position);
    }
}

