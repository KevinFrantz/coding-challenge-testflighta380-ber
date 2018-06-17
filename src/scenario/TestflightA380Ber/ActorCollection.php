<?php
namespace scenario\TestflightA380Ber;

use interfaces\scenario\model\actor\TestflightA380Ber;
use model\data\collection\GuestCollection;
use model\data\material\person\Major;
use model\data\material\building\airport\BER;
use model\data\collection\JournalistCollection;
use model\data\material\vehicle\plane\A380;
use model\data\material\person\Journalist;
use model\data\material\person\Guest;

/**
 *
 * @author kevinfrantz
 *        
 */
class ActorCollection extends DataCollection implements TestflightA380Ber
{
    public function __construct(){
       $this->set(self::MAJOR,new Major());
       $this->set(self::GUESTS,new Major());
       $this->set(self::AIRPORT,new BER());
       $this->initPlane();
       $this->initJournalistCollection();
       $this->initGuestCollection();
    }
    
    private function initPlane():void{
        $plane = new A380();
        $plane->setName('Wright Brothers Flight');
        $this->set(self::PLANE,$plane);
    }
}