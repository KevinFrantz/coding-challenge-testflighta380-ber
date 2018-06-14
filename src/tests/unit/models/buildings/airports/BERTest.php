<?php
namespace tests\unit\models\buildings\airports;

use PHPUnit\Framework\TestCase;

use \models\buildings\airports\BER;
use models\buildings\terminals\BerAirportTerminal;
use models\buildings\runways\BerAirportRunway2;
use models\buildings\gates\BerAirportGate1;
use models\buildings\towers\BerAirportTower;
use models\collections\GateCollection;
use models\collections\RunwayCollection;
use models\locations\Sky;
/**
 *
 * @author kevinfrantz
 *        
 */
class BERTest extends TestCase
{

    /**
     *
     * @var BER
     */
    private $ber;

    protected function setUp(): void
    {
        $this->ber = new BER();
    }

    public function testTerminal(): void
    {
        $this->assertInstanceOf(BerAirportTerminal::class, $this->ber->getTerminal());
    }
    
    public function testRunways(): void
    {
        $this->assertInstanceOf(RunwayCollection::class, $this->ber->getRunways());
    }
    
    public function testGates(): void
    {
        $this->assertInstanceOf(GateCollection::class, $this->ber->getGates());
    }
    
    public function testTower(): void
    {
        $this->assertInstanceOf(BerAirportTower::class, $this->ber->getTower());
    }
    
    public function testPositionAccessor():void{
        $this->assertInstanceOf(Sky::class,$this->ber->getPosition());
    }
}

