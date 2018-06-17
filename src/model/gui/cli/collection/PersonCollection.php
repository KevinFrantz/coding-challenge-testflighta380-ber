<?php
namespace model\gui\cli\collection;

use interfaces\model\method\collection\CollectionInterface as DataCollectionInterface;
use interfaces\model\method\collection\PersonCollectionInterface;
use model\gui\cli\material\person\Person;
use interfaces\model\method\material\person\PersonInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class PersonCollection extends AbstractCollection implements PersonCollectionInterface
{
    public function initOriginCollection(DataCollectionInterface $origin)
    {
        $this->clear();
        /**
         * @var Person $person
         */
        foreach ($origin->getValues() as $person){
            $this->add(new Person($person,$person->getGuiRepository()));
        }
        $this->origin = $origin;
    }
    
    /**
     * {@inheritDoc}
     * @see \Doctrine\Common\Collections\ArrayCollection::add()
     * @param PersonInterface $element
     */
    public function add($element){
        parent::add($element);
        $this->repository->printOutput("Person ".$element->getName()." added to group.");
    }
}

