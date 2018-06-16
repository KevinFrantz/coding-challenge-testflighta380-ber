<?php
namespace interfaces\model\data\material;

use interfaces\model\data\DataInterface;
use interfaces\model\data\position\PositionInterface;
use interfaces\model\method\move\TargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface MaterialInterface extends DataInterface, TargetInterface
{
    public function setName(string $name):void;
    
    public function getName():string;
    
    public function getPosition():PositionInterface;
}

