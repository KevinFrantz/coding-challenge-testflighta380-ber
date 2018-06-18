<?php
namespace interfaces\model\method\collection;

use interfaces\model\data\collection\GuestCollectionInterface as DataGuestCollectionInterface;
use interfaces\model\method\action\applaud\ApplaudInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GuestCollectionInterface extends PersonCollectionInterface, DataGuestCollectionInterface, ApplaudInterface
{
}