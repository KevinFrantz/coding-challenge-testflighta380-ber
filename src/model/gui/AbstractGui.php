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
    public function __construct(DataInterface $origin, ?RepositoryInterface $repository){
        parent::__construct($origin);
        if(!$repository){
            $this->setRepository(new GlobalPrintRepository());
        }
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

