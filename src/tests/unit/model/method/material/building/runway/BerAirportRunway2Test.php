<?php
namespace tests\unit\model\method\material\building\runway;

use model\method\material\building\runway\BerAirportRunway2;
use PHPUnit\Framework\TestCase;
use model\data\position\AbstractPosition;

/**
 *
 * @author kevinfrantz
 *        
 */
class BerAirportRunway2Test extends TestCase
{
    protected $runway;
    
    protected function setUp(){
        $this->runway= new BerAirportRunway2();
    }
    
    public function testTargetInterface(){
        $this->assertInstanceOf(AbstractPosition::class, $this->runway->getTargetPosition());
    }
}

