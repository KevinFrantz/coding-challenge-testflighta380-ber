<?php
namespace model\method\collection;

use interfaces\model\method\action\applaud\ApplaudInterface;
use interfaces\model\data\collection\CollectionInterface as DataCollectionInterface;
use interfaces\model\method\collection\GuestCollectionInterface;
use model\method\material\person\Guest;

/**
 *
 * @author kevinfrantz
 *        
 */
class GuestCollection extends PersonCollection implements ApplaudInterface,GuestCollectionInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\action\applaud\ApplaudInterface::applaud()
     */
    public function applaud(): void
    {
        foreach ($this->getValues() as $guest){
            $guest->applaud();
        }
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\collection\CollectionInterface::initOriginCollection()
     */
    public function initOriginCollection(DataCollectionInterface $origin)
    {
        $this->clear();
        foreach($origin->getValues() as $guest){
            $this->add(new Guest($guest));
        }
    }
}

