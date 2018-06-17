<?php
namespace scenario\TestflightA380Ber;

use scenario\AbstractScenario;
use interfaces\scenario\model\actor\TestflightA380Ber as ActorsTestflightA380Ber;
use repository\output\GlobalPrintRepository;

/**
 *
 * @author kevinfrantz
 * @todo Implement Pilot as flight controller
 */
final class TestflightA380Ber extends AbstractScenario
{
    /**
     * @var ActorsTestflightA380Ber
     */
    protected $actors;
    
    public function __construct(){
        $data = new DataCollection();
        $actors = new ActorCollection($data);
        $this->actors = new CliCollection($actors);
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
    
    public function print():void{
        $repository = new GlobalPrintRepository();
        $repository->printOutput();
    }
    
    private function flyToAirport():void{
        $this->actors->getPlane();
    }
    
    private function waitForLandingPermission():void{
        #do{
        #    echo "Plane ". $this->actors->plane->getName()." is waiting for permission to land...";   
        #}while(!$this->controllers->tower->getPermissionToLand());
    }
    
    private function land():void{
        #$this->controllers->flight($this->controllers->tower->getFreeRunway());
    }
    
    private function moveToGate():void
    {
        
    }
    
    private function moveOverGateToTerminal():void{
        
    }
    
    private function publicWelcome():void{
        
    }
}
