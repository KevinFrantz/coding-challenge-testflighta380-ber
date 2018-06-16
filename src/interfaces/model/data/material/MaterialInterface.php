<?php
namespace interfaces\model\data\material;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MaterialInterface
{
    public function setName(string $name):void;
    
    public function getName():string;
}

