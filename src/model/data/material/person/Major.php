<?php
namespace model\data\material\person;

use interfaces\model\data\material\person\MajorInterface;

class Major extends AbstractPerson implements MajorInterface
{
    /**
     * @var string
     */
    protected $name = 'unnamed major';
}

