<?php
namespace model\method\collection;

use interfaces\model\method\action\move\MovingInterface;
use interfaces\model\method\action\applaud\ApplaudInterface;
use interfaces\model\data\collection\CollectionInterface as DataCollectionInterface;
use interfaces\model\method\collection\GuestCollectionInterface;
use interfaces\model\data\position\PositionInterface;
use model\data\collection\PersonCollection;
use model\method\material\person\Guest;

/**
 *
 * @author kevinfrantz
 *        
 */
class GuestCollection extends PersonCollection implements ApplaudInterface,MovingInterface,GuestCollectionInterface
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
     * @see \interfaces\model\method\action\move\MovingInterface::setPosition()
     */
    public function setPosition(PositionInterface $position): void
    {
        /**
         * @var GuestInterface $guest
         */
        foreach ($this->getValues() as $guest){
            $guest->setPosition($position);
        }
    }

    /**
     * Returns the Position of the first guest
     * {@inheritDoc}
     * @see \interfaces\model\method\action\move\TargetInterface::getPosition()
     */
    public function getPosition(): PositionInterface
    {
        return $this->get(0)->getPosition();
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

