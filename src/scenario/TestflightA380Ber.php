<?php
namespace scenario;

/**
 *
 * @author kevinfrantz
 *        
 */
final class TestflightA380Ber extends AbstractScenario
{
    private $major;
    
    private $guests;
    
    private $journalists;
    
    private $airTractor;
    
    private $plane;
    
    private $tower;
    
    private $gate; 
    
    public function __construct(){

    }
       
    public function play(): void
    {
        $this->waitForLandingPermission();
        $this->land(); 
        $this->moveToGate();
        $this->moveOverGateToTerminal();
        $this->publicWelcome();
    }
    
    private function waitForLandingPermission():void{
        
    }
    
    private function land():void{
        
    }
    
    private function moveToGate():void
    {
        
    }
    
    private function moveOverGateToTerminal():void{
        
    }
}
