<?php
namespace model\method\material;

use model\method\AbstractMethod;
use model\data\material\AbstractMaterialModel;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractMaterial extends AbstractMethod
{
    /**
     * @var AbstractMaterialModel
     */
    protected $origin;
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\MaterialInterface::setName()
     */
    public function setName(string $name): void
    {
        $this->origin->setName($name);
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\MaterialInterface::getName()
     */
    public function getName(): string
    {
        return $this->origin->getName();
    }
}

