<?php
namespace model\data\material\building\tower;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\TowerInterface;
use interfaces\model\data\position\SkyInterface;
use interfaces\model\data\material\building\airport\AirportInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractTower extends AbstractBuilding implements TowerInterface
{
    /**
     * @var AirportInterface
     */
    protected $airport; 
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\building\TowerInterface::getPosition()
     */
    public function getPosition(): SkyInterface
    {
        return $this->position;
    }
    
    /**
     * {@inheritDoc}
     * @see \model\data\material\AbstractMaterialModel::getName()
     */
    public function getName():string{
        return $this->airport->getName().' Tower';
    }
    
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

