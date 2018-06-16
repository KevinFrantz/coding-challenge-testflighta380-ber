<?php
namespace scenario\TestflightA380Ber;
use controller\move\FlightController;
use controller\move\DriveController;
use controller\applaud\ApplaudController;
use interfaces\controller\move\MoveControllerInterface;
use interfaces\controller\applaud\ApplaudControllerInterface;
use interfaces\controller\airport\AirportControllerInterface;
/**
 *
 * @author kevinfrantz
 *        
 */
class Controllers
{
    /**
     * @var MoveControllerInterface
     */
    public $flight;
    
    /**
     * @var MoveControllerInterface
     */
    public $drive;
    
    /**
     * @var MoveControllerInterface
     */
    public $move;
    
    /**
     * @var ApplaudControllerInterface
     */
    public $applaud;
    
    /**
     * @var AirportControllerInterface
     */
    public $tower;
    
    /**
     * @param CLIActors $actors
     */
    public function __construct(CLIActors $actors){
        $this->flight = new FlightController($actors->plane);
        $this->drive = new DriveController($actors->airTractor);
        $this->walk = new DriveController($actors->guests);
        $this->applaud = new ApplaudController($actors->guests);
        $this->tower = $actors->airport->getTower();
    }
}

