<?php
namespace tests\unit\model\method\material\building\runway;

use PHPUnit\Framework\TestCase;
use model\data\position\AbstractPosition;
use model\method\material\building\runway\AirportRunway;
use model\data\material\building\runway\BerAirportRunway2 as BerAirportRunwayOrigin;
use model\data\material\building\airport\BER;

/**
 *
 * @author kevinfrantz
 *        
 */
class AirportRunwayTest extends TestCase
{
    /**
     * @var AirportRunway
     */
    protected $runway;
    
    protected function setUp(){
        $this->runway= new AirportRunway(new BerAirportRunwayOrigin(new BER()));
    }
    
    public function testTargetInterface(){
        $this->assertInstanceOf(AbstractPosition::class, $this->runway->getPosition());
    }
}

