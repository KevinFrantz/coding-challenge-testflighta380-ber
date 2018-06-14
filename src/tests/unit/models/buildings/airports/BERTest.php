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

    public function setUp(): void
    {
        $this->ber = new BER();
    }

    public function testTerminal(): void
    {
        $this->assertInstanceOf('Terminal', $actual, $this->ber->getTerminal());
    }
}

