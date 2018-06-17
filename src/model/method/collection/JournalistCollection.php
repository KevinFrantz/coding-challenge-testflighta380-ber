<?php
namespace model\method\collection;

use interfaces\model\method\collection\CollectionInterface as DataCollectionInterface;
use interfaces\model\method\collection\JournalistCollectionInterface;
use model\method\material\person\Journalist;

/**
 *
 * @author kevinfrantz
 *        
 */
class JournalistCollection extends AbstractCollection implements JournalistCollectionInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\model\method\collection\CollectionInterface::initOriginCollection()
     */
    public function initOriginCollection(DataCollectionInterface $origin)
    {
        foreach ($origin->getValues() as $journalist){
            $journalists->add(new Journalist($journalist));
        }
    }
}