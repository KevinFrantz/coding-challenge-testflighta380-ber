<?php
namespace model\data\collection;

use Doctrine\Common\Collections\ArrayCollection;
use interfaces\model\data\collection\CollectionInterface;
use interfaces\model\data\DataInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractCollection extends ArrayCollection implements CollectionInterface,DataInterface
{
}

