<?php
namespace models\collections;

use Doctrine\Common\Collections\ArrayCollection;
use interfaces\models\collections\PersonCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class PersonCollection extends ArrayCollection implements PersonCollectionInterface
{
}

