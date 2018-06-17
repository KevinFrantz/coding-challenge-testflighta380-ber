<?php
namespace tests\unit\model\data\material;

use PHPUnit\Framework\TestCase;
use interfaces\model\data\material\MaterialInterface;
use interfaces\model\data\position\PositionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractTestMaterial extends TestCase
{
    /**
     * @var MaterialInterface
     */
    protected $material;
    
    public function testPositionGetter():void{
        $this->assertInstanceOf(PositionInterface::class, $this->material->getPosition());    
    }
    
    public function testNameAccessors():void{
        $name = 'Testname :)';
        $this->material->setName($name);
        $this->assertEquals($name, $this->material->getName());
    }
}

