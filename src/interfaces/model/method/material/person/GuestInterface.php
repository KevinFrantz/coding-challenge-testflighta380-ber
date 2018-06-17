<?php
namespace interfaces\model\method\material\person;

use interfaces\model\data\material\person\PersonInterface;
use interfaces\model\method\action\applaud\ApplaudInterface;
use interfaces\model\data\material\person\GuestInterface as DataGuestInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GuestInterface extends PersonInterface, ApplaudInterface, DataGuestInterface
{
}

