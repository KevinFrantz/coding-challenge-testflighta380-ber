<?php
namespace scenario;

use model\gui\cli\material\person\Major;

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
       $this->setCliObjects();
    }
    
    private function setCliObjects(){
        $this->major = new Major();
    }
        
    private function get 
       
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
