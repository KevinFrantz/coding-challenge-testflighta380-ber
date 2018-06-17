<?php
namespace model\data\collection;

use Doctrine\Common\Collections\ArrayCollection;
use interfaces\model\data\collection\CollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractCollection extends ArrayCollection implements CollectionInterface
{
}