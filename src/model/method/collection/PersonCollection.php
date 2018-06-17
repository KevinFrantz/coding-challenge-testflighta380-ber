<?php
namespace model\method\collection;

use interfaces\model\data\collection\PersonCollectionInterface;
use interfaces\model\data\collection\CollectionInterface as DataCollectionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class PersonCollection extends AbstractCollection implements PersonCollectionInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\collection\CollectionInterface::initOriginCollection()
     */
    public function initOriginCollection(DataCollectionInterface $origin)
    {
        $this->clear();
        foreach ($origin->getValues() as $person){
            $this->add($person);
        }
    }
}

