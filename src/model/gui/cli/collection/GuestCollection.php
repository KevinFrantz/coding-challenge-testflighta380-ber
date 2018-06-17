<?php
namespace model\gui\cli\collection;

use interfaces\model\data\collection\CollectionInterface;
use interfaces\model\method\collection\GuestCollectionInterface;
use model\gui\cli\material\person\Guest;


/**
 *
 * @author kevinfrantz
 *        
 */
final class GuestCollection extends AbstractCollection implements GuestCollectionInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\collection\CollectionInterface::initOriginCollection()
     */
    public function initOriginCollection(CollectionInterface $origin):void
    {
        $this->clear();
        /**
         * @var Guest $guest
         */
        foreach ($origin->getValues() as $guest){
            $this->add(new Guest($guest, $this->getGuiRepository()));
        }
        $this->origin= $origin;
    }
    
    public function applaud(): void
    {
        /**
         * @var Guest $guest
         */
        foreach ($this->getValues() as $guest){
            $guest->applaud();
        }
    }
}

