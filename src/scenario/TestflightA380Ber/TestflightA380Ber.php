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
        $this->controllers = new Controllers($this->actors);
    }
       
    public function play(): void
    {
        $this->flyToAirport();
        $this->waitForLandingPermission();
        $this->land(); 
        $this->moveToGate();
        $this->moveOverGateToTerminal();
        $this->publicWelcome();
    }
    
    private function flyToAirport():void{
        $this->controllers->flight->moveTo(
            $this->actors->airport
            );
    }
    
    private function waitForLandingPermission():void{
        do{
            echo "Plane ". $this->actors->plane->getName()." is waiting for permission to land...";   
        }while(!$this->controllers->tower->getPermissionToLand());
    }
    
    private function land():void{
    }
    
    private function moveToGate():void
    {
        
    }
    
    private function moveOverGateToTerminal():void{
        
    }
}
