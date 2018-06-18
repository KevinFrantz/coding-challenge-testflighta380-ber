<?php
namespace model\method\material\person;

use interfaces\model\method\material\person\GuestInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
final class Guest extends Person implements GuestInterface
{
    public function applaud(): void
    {
        return;
    }
}

