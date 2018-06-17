<?php
namespace tests\unit\model\data\material\person;

use model\data\material\person\Guest;

/**
 *
 * @author kevinfrantz
 *        
 */
class GuestTest extends AbstractTestPerson
{
    protected function setUp():void{
        $this->material = new Guest();
    }
}

