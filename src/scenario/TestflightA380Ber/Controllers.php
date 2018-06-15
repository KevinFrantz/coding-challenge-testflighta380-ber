<?php
namespace scenario\TestflightA380Ber;
use controller\move\FlightController;
use controller\move\DriveController;
use controller\applaud\ApplaudController;
/**
 *
 * @author kevinfrantz
 *        
 */
class Controllers
{
    public $flight;
    
    public $drive;
    
    public $move;
    
    public $applaud;
    
    public $tower;
    
    public function __construct(CLIActors $actors){
        $this->flightController = new FlightController($actors->plane);
        $this->driveController = new DriveController($actors->airTractor);
        $this->moveController = new DriveController($actors->guests);
        $this->applaudController = new ApplaudController($actor->guests);
        $this->tower = $actors->airport->getTower();
    }
}

