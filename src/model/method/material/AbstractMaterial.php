<?php
namespace model\method\material;

use model\method\AbstractMethod;
use model\data\material\AbstractMaterialModel;
use interfaces\model\method\material\MaterialInterface;
use interfaces\model\data\position\PositionInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractMaterial extends AbstractMethod implements MaterialInterface
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
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\MaterialInterface::getPosition()
     */
    public function getPosition(): PositionInterface
    {
        return $this->origin->getPosition();
    }

}

