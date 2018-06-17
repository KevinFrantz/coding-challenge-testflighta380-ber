<?php
namespace model\method\collection;

use interfaces\model\data\collection\CollectionInterface as DataCollectionInterface;
use interfaces\model\method\collection\JournalistCollectionInterface;
use model\method\material\person\Journalist;

/**
 *
 * @author kevinfrantz
 *        
 */
final class JournalistCollection extends AbstractCollection implements JournalistCollectionInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\collection\CollectionInterface::initOriginCollection()
     */
    public function initOriginCollection(DataCollectionInterface $origin):void
    {
        $this->clear();
        foreach ($origin->getValues() as $journalist){
            $this->add(new Journalist($journalist));
        }
    }
}