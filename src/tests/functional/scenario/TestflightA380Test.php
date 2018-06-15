<?php
namespace tests\functional;

use PHPUnit\Framework\TestCase;
use scenario\TestflightA380Ber;

/**
 *
 * @author kevinfrantz
 *        
 */
class TestflightA380Test extends TestCase
{
    protected $testflight;
    
    public function setUp():void{
        $this->testflight = new TestflightA380Ber
        (
            
        );
    }
    
    public function testOutput():void{
        $this->assertEquals(
            file_get_contents(__DIR__.'/test_flight_a380_ber_expected_string.txt'), 
            $this->testflight->play()
        );
    }
}

