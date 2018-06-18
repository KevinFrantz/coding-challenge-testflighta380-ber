<?php
namespace model\data\material;

use model\data\position\AbstractPosition;
use interfaces\model\data\material\MaterialInterface;
use interfaces\model\data\position\PositionInterface;
use model\data\position\Sky;

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
    
    public function __construct(){
        $this->name = 'noname';
        $this->position = new Sky();
    }
    
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
    
    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\MaterialInterface::getPosition()
     */
    public function getPosition(): PositionInterface
    {
        return $this->position;
    }

}

