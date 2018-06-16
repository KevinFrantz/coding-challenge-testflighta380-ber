<?php
namespace model\data\material;

use model\data\position\AbstractPosition;
use interfaces\model\data\material\MaterialInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractMaterialModel implements MaterialInterface
{

    /**
     * @var AbstractPosition
     */
    protected $position;
    
    /**
     * @var string
     */
    protected $name;
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\MaterialInterface::setName()
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\MaterialInterface::getName()
     */
    public function getName(): string
    {
        return $this->name;
    }
}

