<?php
namespace model\method\collection;

use model\data\collection\GuestCollection as GuestCollectionOrigin;
use model\method\traits\MovingPosition;
use interfaces\model\method\move\MovingInterface;
use interfaces\model\method\applaud\ApplaudInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class GuestCollection extends GuestCollectionOrigin implements MovingInterface,ApplaudInterface
{
    use MovingPosition;
    
    public function applaud(): void
    {
        foreach ($this->getValues() as $guest){
            $guest->applaud();
        }
    }
}

