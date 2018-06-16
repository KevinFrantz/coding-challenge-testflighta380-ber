<?php
namespace scenario;

use interfaces\scenario\actors\ActorCollectionInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractActorCollection extends ArrayCollection implements ActorCollectionInterface
{}