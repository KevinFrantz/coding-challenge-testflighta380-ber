<?php
namespace model\method\collection;

use model\data\collection\GuestCollection as GuestCollectionData;
use interfaces\model\data\position\PositionInterface;
use interfaces\model\method\controller\move\MovingInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class GuestCollection extends GuestCollectionData implements MovingInterface
{
    private $position;
    
    public function getPosition():PositionInterface
    {
        return $position;
    }

    public function setPosition(PositionInterface $position):void
    {
        $this->position = $position;
    }
}

