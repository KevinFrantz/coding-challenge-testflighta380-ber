<?php
namespace interfaces\model\data\collection;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Selectable;
use interfaces\model\data\DataInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface CollectionInterface extends Collection, Selectable, DataInterface
{
}

