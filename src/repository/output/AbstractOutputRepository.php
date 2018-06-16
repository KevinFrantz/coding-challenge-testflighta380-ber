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
    
    public function addOutput($output)
    {
        $this->outputElements->add($output);
    }

    public function getOutput()
    {}

}

