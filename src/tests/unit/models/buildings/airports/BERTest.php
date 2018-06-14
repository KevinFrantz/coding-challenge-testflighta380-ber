<?php
namespace tests\unit\models\buildings\airports;

use PHPUnit\Framework\TestCase;

use \models\buildings\airports\BER;
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

    protected function testTerminal(): void
    {
        $this->assertInstanceOf('Terminal', $this->ber->getTerminal());
    }
    
    protected function testRunway(): void
    {
        $this->assertInstanceOf('Runway', $this->ber->getRunway());
    }
    
    protected function testGate(): void
    {
        $this->assertInstanceOf('Gate', $this->ber->getGate());
    }
    
    protected function testTower(): void
    {
        $this->assertInstanceOf('Tower', $this->ber->getTower());
    }
}

