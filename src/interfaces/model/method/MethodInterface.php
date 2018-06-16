<?php
namespace interfaces\model\method;

use interfaces\model\data\DataInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MethodInterface
{
    public function __construct(DataInterface $origin);
}

