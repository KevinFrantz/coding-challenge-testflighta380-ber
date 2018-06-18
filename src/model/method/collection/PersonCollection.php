<?php
namespace model\method\collection;

use interfaces\model\data\collection\PersonCollectionInterface;
use interfaces\model\data\position\PositionInterface;
use interfaces\model\data\collection\CollectionInterface as DataCollectionInterface;
use interfaces\model\method\action\move\MovingInterface;
use model\method\material\person\Person;

/**
 *
 * @author kevinfrantz
 *        
 */
class PersonCollection extends AbstractCollection implements PersonCollectionInterface,MovingInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\collection\CollectionInterface::initOriginCollection()
     */
    public function initOriginCollection(DataCollectionInterface $origin):void
    {
        $this->clear();
        foreach ($origin->getValues() as $person){
            $this->add(new Person($person));
        }
        $this->origin = $origin;
    }

    /**
     * Returns the Position of the first guest
     * {@inheritDoc}
     * @see \interfaces\model\method\action\move\TargetInterface::getPosition()
     */
    public function getPosition(): PositionInterface
    {   
        if($this->isEmpty()){
            throw new \Exception("The group doesn't contain members and therefore hasn't a position.");
        }
        return $this->get(0)->getPosition();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\action\move\MovingInterface::setPosition()
     */
    public function setPosition(PositionInterface $position): void
    {
        /**
         * @var PersonInterface $person
         */
        foreach ($this->getValues() as $person){
            $person->setPosition($position);
        }
    }
}

