<?php
namespace interfaces\model\data\collection;

use interfaces\model\data\material\person\GuestInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GuestCollectionInterface extends CollectionInterface
{
    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\Collections\Collection::getValues()
     * @return GuestInterface[]
     */
    public function getValues();
}

