<?php
namespace tests\unit\model\data\material\building\airport;

use PHPUnit\Framework\TestCase;

use model\data\material\building\airport\BER;
use model\data\material\building\terminal\BerAirportTerminal;
use model\data\material\building\tower\BerAirportTower;
use model\data\collection\GateCollection;
use model\data\collection\RunwayCollection;
use model\data\position\Sky;
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

