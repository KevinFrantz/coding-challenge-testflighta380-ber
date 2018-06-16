<?php
namespace tests\unit\model\method\material\vehicles\plane;

use PHPUnit\Framework\TestCase;
use model\data\material\vehicle\plane\A380  as A380Origin;
use model\method\material\vehicle\plane\A380 as A380Method;
use model\data\position\Sky;

/**
 *
 * @author kevinfrantz
 *        
 */
class A380Test extends TestCase
{
    /**
     * @var A380Method
     */
    protected $a380;
    
    protected function setUp(){
        $this->a380 = new A380Method(new A380Origin());
    }
    public function testMovingInterface(){
        $position = new Sky();
        $this->a380->setPosition($position);
        $this->assertEquals($this->a380->getPosition(), $position);
    }
}

