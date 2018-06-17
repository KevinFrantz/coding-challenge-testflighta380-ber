<?php
namespace tests\unit\model\method\material\building\airport;

use PHPUnit\Framework\TestCase;
use interfaces\model\method\material\building\airport\AirportInterface;
use model\method\material\building\airport\Airport;
use model\data\material\building\airport\BER;
use interfaces\model\data\collection\RunwayCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AirportTest extends TestCase
{
    /**
     * @var AirportInterface
     */
    protected $airport;
    
    protected function setUp():void{
        $this->airport = new Airport(new BER());
    }
    
    public function testGetRunways():void{
        $this->assertInstanceOf(RunwayCollectionInterface::class, $this->airport->getRunways());
    }
}

