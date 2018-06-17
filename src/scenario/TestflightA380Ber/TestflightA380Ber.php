<?php
namespace scenario\TestflightA380Ber;

use scenario\AbstractScenario;
use interfaces\scenario\model\actor\TestflightA380Ber as ActorsTestflightA380Ber;
use repository\output\GlobalPrintRepository;
use interfaces\repository\output\PrintRepositoryInterface;

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
    
    /**
     * @var PrintRepositoryInterface
     */
    protected $repository;
    
    public function __construct(){
        $this->repository = new GlobalPrintRepository();
        $this->repository->addOutput('Initialization of objects...');
        $data = new DataCollection();
        $actors = new ActorCollection($data);
        $this->actors = new CliCollection($actors);
    }
       
    public function play(): void
    {
        $this->repository->addOutput('Play Testflight A30 BER starts.');
        $this->flyToAirport();
        $this->waitForLandingPermission();
        $this->land(); 
        $this->moveToGate();
        $this->moveOverGateToTerminal();
        $this->publicWelcome();
       
    }
    
    public function print():void{
        $this->repository->printOutput();
    }
    
    private function flyToAirport():void{
        $this->actors->getPlane();
    }
    
    private function waitForLandingPermission():void{
        do{
            $this->repository->addOutput("Plane ". $this->actors->getPlane()->getName()." is waiting for permission to land...");   
        }while(!$this->actors->getAirport()->getTower()->getPermissionToLand());
    }
    
    private function land():void{
        
    }
    
    private function moveToGate():void
    {
        
    }
    
    private function moveOverGateToTerminal():void{
        
    }
    
    private function publicWelcome():void{
        
    }
}
