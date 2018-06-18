<?php
namespace model\gui\cli\collection;

use interfaces\model\data\collection\CollectionInterface;
use interfaces\model\method\collection\PersonCollectionInterface;
use model\gui\cli\material\person\Person;
use interfaces\model\method\material\person\PersonInterface;
use interfaces\model\method\action\speak\SpeakInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class PersonCollection extends AbstractCollection implements PersonCollectionInterface,SpeakInterface
{
    public function initOriginCollection(CollectionInterface $origin):void
    {
        $this->clear();
        /**
         * @var Person $person
         */
        foreach ($origin->getValues() as $person){
            $this->add(new Person($person,$this->getGuiRepository()));
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
        $this->repository->addOutput("Person added to group.");
    }
    
    /**
     * @param string $sentence
     */
    public function speak(string $sentence): void
    {
        /**
         * @var PersonInterface $person
         */
        foreach ($this->getValues() as $person){
            $person->speak($sentence);
        }
    }

}

