<?php
namespace model\method;

use interfaces\model\method\MethodInterface;
use interfaces\model\data\DataInterface;

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
    protected $wrappedElement;
    
    /**
     * @param DataInterface $data
     */
    public function __construct(DataInterface $data){
        $this->wrappedElement = $data; 
    }
}

