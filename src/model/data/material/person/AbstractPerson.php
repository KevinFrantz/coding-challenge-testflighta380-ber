<?php
namespace model\data\material\person;

use model\data\material\AbstractMaterialModel;
use interfaces\model\data\material\person\PersonInterface;
use interfaces\model\data\position\PositionInterface;

abstract class AbstractPerson extends AbstractMaterialModel implements PersonInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\action\move\MovingInterface::setPosition()
     */
    public function setPosition(PositionInterface $position): void
    {
       $this->position = $position; 
    }
}

