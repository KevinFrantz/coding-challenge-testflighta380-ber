<?php
namespace interfaces\model\method\person;

use interfaces\model\data\material\person\PersonInterface;
use interfaces\model\method\applaud\ApplaudInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GuestInterface extends PersonInterface, ApplaudInterface
{
}

