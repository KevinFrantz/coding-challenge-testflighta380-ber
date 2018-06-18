<?php
namespace model\data\material\building\terminal;

use model\data\material\building\AbstractBuilding;
use interfaces\model\data\material\building\TerminalInterface;
use interfaces\model\data\material\building\airport\AirportInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractTerminal extends AbstractBuilding implements TerminalInterface{
    
    /**
     * @var AirportInterface
     */
    protected $airport;
    
    /**
     * @param AirportInterface $airport
     */
    public function __construct(AirportInterface $airport){
        $this->airport = $airport;
    }
    
    /**
     * {@inheritDoc}
     * @see \model\data\material\AbstractMaterialModel::getName()
     */
    public function getName():string{
        if($this->name){
            return $this->name;
        }
        return $this->airport->getName()." Terminal";
    }
}

