<?php
namespace model\gui;

use interfaces\model\gui\GuiInterface;
use interfaces\repository\RepositoryInterface;
use model\method\AbstractMethod;
use interfaces\model\data\DataInterface;
use repository\output\GlobalPrintRepository;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractGui extends AbstractMethod implements GuiInterface
{
    /**
     * @var RepositoryInterface
     */
    protected $repository;
    
    /**
     * @var DataInterface
     */
    protected $origin;
    
    /**
     * Set origin source and define an standart repository
     * @param DataInterface $origin
     */
    public function __construct(DataInterface $origin, ?RepositoryInterface $repository=NULL){
        parent::__construct($origin);
        if(!$repository){
            $this->setGuiRepository(new GlobalPrintRepository());
        }else{
            $this->repository = $repository;
        }
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

