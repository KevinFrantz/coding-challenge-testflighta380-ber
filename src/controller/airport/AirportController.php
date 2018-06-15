<?php
namespace controller\airport;

use controller\AbstractController;
use model\data\material\building\airport\AbstractAirport;
use interfaces\model\data\material\building\RunwayInterface;
use interfaces\model\data\material\building\GateInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AirportController extends AbstractController
{
    /**
     * @var AbstractAirport
     */
    protected $airport;
    
    public function __construct(AbstractAirport $airport){
        $this->airport = $airport;
    }
    
    public function getFreeRunway(): RunwayInterface{
        /**
         * @var RunwayInterface $runway
         */
        foreach ($this->airport->getRunways()->getValues() as $runway){
            if($runway->getVehicles()->isEmpty()){
               return $runway; 
            }
        }
        throw new \Exception("Ther's no free runway!");
    }
    
    public function getPermissionToLand():bool{
        try{
            if($this->getFreeRunway() && $this->getFreeGate){
                return true;
            }
        }catch (\Exception $exception){
            /**
             * This Exception catching is just implemented, so that I don't have to duplicate the used functions 
             */
        }
        return false;
    }
    
    public function getFreeGate():GateInterface{
        /**
         * @var GateInterface $gate
         */
        foreach ($this->airport->getGates()->getValues() as $gate){
            if(!$gate->getPlane()){
                return $gate;
            }
        }
        throw new \Exception("Ther's no free gate!");
    }
    
}


