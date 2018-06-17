<?php
namespace tests\unit\model\data\material\person;

use interfaces\model\data\material\person\PersonInterface;
use model\data\position\Sky;
use tests\unit\model\data\material\AbstractTestMaterial;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractTestPerson extends AbstractTestMaterial
{
    /**
     * @var PersonInterface
     */
    protected $material;
    
    public function testPositionSetter(){
        $position = new Sky();
        $this->material->setPosition($position);
        $this->assertEquals($this->material->getPosition(), $position);
    }
}

