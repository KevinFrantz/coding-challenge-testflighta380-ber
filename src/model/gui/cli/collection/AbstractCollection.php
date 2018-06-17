<?php
namespace model\gui\cli\collection;

use interfaces\model\method\collection\CollectionInterface;
use Doctrine\Common\Collections\ArrayCollection;
use interfaces\model\gui\cli\CliInterface;
use interfaces\repository\RepositoryInterface;
use interfaces\model\method\MethodInterface;
use repository\output\GlobalPrintRepository;

/**
 * @author kevinfrantz
 *        
 */
abstract class AbstractCollection extends ArrayCollection implements CollectionInterface, CliInterface
{
    /**
     * @var RepositoryInterface
     */
    protected $repository;
    
    /**
     * @var MethodInterface
     */
    protected $origin;
    
    /**
     * Set origin source and define an standart repository
     * @param MethodInterface $origin
     */
    public function __construct(MethodInterface $origin, ?RepositoryInterface $repository=NULL){
        if(!$repository){
            $this->setRepository(new GlobalPrintRepository());
        }
        $this->initOriginCollection($origin);
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\gui\GuiInterface::setRepository()
     */
    public function setRepository(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}

