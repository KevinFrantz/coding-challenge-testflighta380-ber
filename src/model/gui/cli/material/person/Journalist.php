<?php
namespace model\gui\cli\material\person;

use interfaces\model\method\material\person\JournalistInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Journalist extends Person implements JournalistInterface
{
    /**
     * @var string
     */
    protected $initializationMessage = 'Journalist created';
}

