<?php
namespace model\method\collection;

use interfaces\model\data\DataInterface;
use interfaces\model\method\collection\CollectionInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This is a wrapper class for DataElements on the Method-Layer
 * @author kevinfrantz
 *        
 */
abstract class AbstractCollection extends ArrayCollection implements CollectionInterface
{    
    /**
     * @param CollectionInterface $origin
     */
    protected function __construct(DataInterface $origin)
    {
        $this->initOriginCollection($origin);
    }
}

