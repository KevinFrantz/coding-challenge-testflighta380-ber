<?php
namespace model\gui\cli\material\person;

use model\method\material\person\Guest as GuestOriginal;

/**
 *
 * @author kevinfrantz
 *        
 */
class Guest extends GuestOriginal
{
    public function applaud(): void
    {}
}

