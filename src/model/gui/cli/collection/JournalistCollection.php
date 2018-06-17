<?php
namespace model\gui\cli\collection;


use interfaces\model\method\collection\JournalistCollectionInterface;
use interfaces\model\data\collection\CollectionInterface;
use model\gui\cli\material\person\Journalist;

/**
 *
 * @author kevinfrantz
 *        
 */
final class JournalistCollection extends PersonCollection implements JournalistCollectionInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\collection\CollectionInterface::initOriginCollection()
     */
    public function initOriginCollection(CollectionInterface $origin):void
    {
        $this->repository->addOutput('Initialize journalists.');
        $this->clear();
        /**
         * @var Journalist $journalist
         */
        foreach ($origin->getValues() as $journalist){
            $this->add(new Journalist($journalist,$this->getGuiRepository()));
        }
        $this->origin= $origin;
    }
}

