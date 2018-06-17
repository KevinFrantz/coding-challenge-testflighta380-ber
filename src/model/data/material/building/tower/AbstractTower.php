<?php
namespace model\data\material\building\tower;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\tower\AirportTowerInterface;
use interfaces\model\data\material\building\airport\AirportInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractTower extends AbstractBuilding implements AirportTowerInterface
{
    /**
     * @var AirportInterface
     */
    protected $airport; 
    
    /**
     * {@inheritDoc}
     * @see \model\data\material\AbstractMaterialModel::getName()
     */
    public function getName():string{
        if($this->name){
            return $this->name;
        }
        return $this->airport->getName()." Tower";
    }
}

