<?php
namespace model\method\material\person;

use model\method\material\AbstractMaterial;
use interfaces\model\data\position\PositionInterface;
use interfaces\model\method\material\person\PersonInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Person extends AbstractMaterial implements PersonInterface
{
    /**
     * @var PersonInterface
     */
    protected $origin;
    
    /**
     * @param PositionInterface $position
     */
    public function setPosition(PositionInterface $position): void
    {
        $this->origin->setPosition($position);
    }
}

