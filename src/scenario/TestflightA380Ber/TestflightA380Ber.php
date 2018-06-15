<?php
namespace scenario\TestflightA380Ber;

use scenario\AbstractScenario;

/**
 *
 * @author kevinfrantz
 *        
 */
final class TestflightA380Ber extends AbstractScenario
{
    protected $actors;
    
    protected $controllers;
    
    public function __construct(){
        $this->actors = new CLIActors();
        $this->controllers = new Controllers($actors);
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
        do{
            echo "Plane ". $this->plane->getName()." is waiting for permission to land...";   
        }while(!$this->actors->tower->getPermission());
    }
    
    private function land():void{
        $this->controllers->flightController
    }
    
    private function moveToGate():void
    {
        
    }
    
    private function moveOverGateToTerminal():void{
        
    }
}
