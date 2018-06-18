<?php
namespace scenario;

use Doctrine\Common\Collections\ArrayCollection;
use interfaces\scenario\model\data\DataCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractDataCollection extends ArrayCollection implements DataCollectionInterface
{
}

