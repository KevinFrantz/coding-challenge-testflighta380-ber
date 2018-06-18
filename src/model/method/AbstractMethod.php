<?php
namespace model\method;

use interfaces\model\data\DataInterface;
use interfaces\model\method\MethodInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractMethod implements MethodInterface
{
    /**
     * @var DataInterface
     */
    protected $origin;
    
    /**
     * @param DataInterface $origin
     */
    public function __construct(DataInterface $origin)
    {
       $this->origin = $origin; 
    }
}

