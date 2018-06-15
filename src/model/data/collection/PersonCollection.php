<?php
namespace model\data\collection;

use Doctrine\Common\Collections\ArrayCollection;
use interfaces\model\data\collection\PersonCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class PersonCollection extends ArrayCollection implements PersonCollectionInterface
{
}

