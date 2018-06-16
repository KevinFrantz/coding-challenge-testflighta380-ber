<?php
namespace model\method\collection;

use interfaces\model\method\move\MovingInterface;
use interfaces\model\method\applaud\ApplaudInterface;
use interfaces\model\data\collection\GuestCollectionInterface;
use interfaces\model\data\position\PositionInterface;
use model\data\collection\PersonCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
class GuestCollection extends PersonCollection implements ApplaudInterface,MovingInterface
{
    /**
     * @var GuestCollectionInterface
     */
    protected $origin;
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\applaud\ApplaudInterface::applaud()
     */
    public function applaud(): void
    {
        foreach ($this->getValues() as $guest){
            $guest->applaud();
        }
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\move\MovingInterface::setPosition()
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
     * @see \interfaces\model\method\move\TargetInterface::getPosition()
     */
    public function getPosition(): PositionInterface
    {
        return $this->get(0)->getPosition();
    }

}

