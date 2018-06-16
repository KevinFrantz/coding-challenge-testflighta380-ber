<?php
namespace interfaces\model\data\material;

use interfaces\model\data\DataInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MaterialInterface extends DataInterface
{
    public function setName(string $name):void;
    
    public function getName():string;
}

