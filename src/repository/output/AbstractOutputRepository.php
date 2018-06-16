<?php
namespace repository\output;

use repository\AbstractRepository;
use interfaces\repository\output\OutputRepositoryInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractOutputRepository extends AbstractRepository implements OutputRepositoryInterface
{
    /**
     * @var string[]
     */
    protected $outputElements;
    
    public function __construct(){
        $this->outputElements = new ArrayCollection();    
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\repository\output\OutputRepositoryInterface::addOutput()
     */
    public function addOutput($output):void
    {
        $this->outputElements->add($output);
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\repository\output\OutputRepositoryInterface::getOutput()
     * @return ArrayCollection|string[]
     */
    public function getOutput()
    {
        return $this->outputElements;
    }
}

