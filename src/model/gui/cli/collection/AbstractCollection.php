<?php
namespace model\gui\cli\collection;

use interfaces\model\method\collection\CollectionInterface;
use Doctrine\Common\Collections\ArrayCollection;
use interfaces\model\gui\cli\CliInterface;
use interfaces\repository\RepositoryInterface;
use interfaces\model\method\MethodInterface;
use repository\output\GlobalPrintRepository;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 * @author kevinfrantz
 *        
 */
abstract class AbstractCollection extends ArrayCollection implements CollectionInterface, CliInterface
{
    /**
     * @var PrintRepositoryInterface
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
            $this->setGuiRepository(new GlobalPrintRepository());
        }
        $this->initOriginCollection($origin);
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\gui\GuiInterface::setGuiRepository()
     */
    public function setGuiRepository(RepositoryInterface $repository):void
    {
        $this->repository = $repository;
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\gui\GuiInterface::getGuiRepository()
     */
    public function getGuiRepository(): RepositoryInterface{
        return $this->repository;
    }
}

