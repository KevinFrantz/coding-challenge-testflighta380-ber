<?php
namespace interfaces\model\method\collection;

use interfaces\model\data\collection\CollectionInterface as DataCollectionInterface;
use interfaces\model\method\MethodInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface CollectionInterface extends DataCollectionInterface, MethodInterface
{
    public function initOriginCollection(DataCollectionInterface $origin):void; 
}

