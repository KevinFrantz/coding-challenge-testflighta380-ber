<?php
namespace model\gui\cli\collection;

use interfaces\model\data\collection\CollectionInterface;
use interfaces\model\method\collection\GuestCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class GuestCollection extends AbstractCollection implements GuestCollectionInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\collection\CollectionInterface::initOriginCollection()
     */
    public function initOriginCollection(CollectionInterface $origin)
    {
        $this->clear();
        /**
         * @var GuestInterface
         */
        foreach ($origin->getValues() as $guest){
            $this->add($guest);
        }
        $this->origin= $origin;
    }
}

