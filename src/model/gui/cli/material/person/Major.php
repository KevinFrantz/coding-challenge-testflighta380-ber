<?php
namespace model\gui\cli\material\person;

use interfaces\model\method\material\person\MajorInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Major extends Person implements MajorInterface
{
    /**
     * @var string
     */
    protected $initializationMessage = 'Major created';
}

