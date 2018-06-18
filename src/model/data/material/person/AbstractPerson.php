<?php
namespace model\data\material\person;

use model\data\material\AbstractMaterialModel;
use interfaces\model\data\material\person\PersonInterface;
use interfaces\model\data\position\PositionInterface;
use model\data\position\Sky;

abstract class AbstractPerson extends AbstractMaterialModel implements PersonInterface
{
    public function __construct(){
        $this->position = new Sky();
        $this->name = "unnamed person";
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\action\move\MovingInterface::setPosition()
     */
    public function setPosition(PositionInterface $position): void
    {
       $this->position = $position; 
    }
}

