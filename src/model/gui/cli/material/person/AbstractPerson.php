<?php
namespace model\gui\cli\material\person;

use model\gui\cli\material\AbstractMaterial;
use interfaces\model\data\position\PositionInterface;
use interfaces\repository\output\PrintRepositoryInterface;
use interfaces\model\method\person\PersonInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractPerson extends AbstractMaterial implements PersonInterface
{
    /** 
     * @var PersonInterface
     */
    protected $origin;
    
    /**
     * @param PersonInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(PersonInterface $origin, ?PrintRepositoryInterface $repository){
        parent::__construct($origin, $repository);
    }
    
    /**
     * @param PositionInterface $position
     */
    public function setPosition(PositionInterface $position): void
    {
        $this->repository->addOutput('Set Position for '.$this->origin->getName().'.');
        return $this->origin->getPosition();
    }
}