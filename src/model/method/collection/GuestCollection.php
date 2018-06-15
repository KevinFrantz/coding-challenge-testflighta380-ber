<?php
namespace model\method\collection;

use model\data\collection\GuestCollection as GuestCollectionOrigin;
use model\method\traits\MovingPosition;
use interfaces\model\method\move\MovingInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class GuestCollection extends GuestCollectionOrigin implements MovingInterface
{
    use MovingPosition;
}

