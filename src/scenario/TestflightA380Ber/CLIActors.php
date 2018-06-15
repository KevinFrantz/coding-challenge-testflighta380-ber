<?php
namespace scenario\TestflightA380Ber;

use model\gui\cli\material\person\Major;
use model\method\collection\GuestCollection;
use model\gui\cli\material\person\Guest;
use model\data\collection\PersonCollection;
use model\gui\cli\material\person\Journalist;
use model\gui\cli\material\vehicle\car\AircraftTractor;
use model\gui\cli\material\vehicle\plane\A380;
use interfaces\model\data\collection\PersonCollectionInterface;
use interfaces\model\data\collection\GuestCollectionInterface;
use interfaces\model\data\material\vehicle\plane\PlaneInterface;
use model\gui\cli\material\building\airport\BER;
use interfaces\model\data\material\vehicle\car\AircraftTractorInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class CLIActors
{
    /** 
     * @var Major
     */
    public $major;
    
    /**
     * @var GuestCollectionInterface
     */
    public $guests;
    
    /** 
     * @var PersonCollectionInterface
     */
    public $journalists;
    
    /**
     * @var AircraftTractorInterface
     */
    public $airTractor;
    
    /**
     * @var PlaneInterface
     */
    public $plane;
    
    /**
     * @var BER
     */
    public $airport;
    
    public function __construct(){
        $this->major = new Major();
        $this->initGuestCollection();
        $this->initJournalistCollection();
        $this->initPlane();
        $this->airTractor = new AircraftTractor();
        $this->airport = new BER();
    }
    
    private function initPlane():void{
        $this->plane = new A380();
        $this->plane->setName('Wright Brothers Flight');
    }
    
    private function initJournalistCollection(){
        $this->journalists = new PersonCollection();
        for ($i=1;$i<=rand(1,500);$i++){
            $this->journalists->add(new Journalist());
        }
    }
    
    private function initGuestCollection(){
        $this->guests = new GuestCollection();
        for ($i=1;$i<=50;$i++){
            $this->guests->add(new Guest());
        }
    }
}

