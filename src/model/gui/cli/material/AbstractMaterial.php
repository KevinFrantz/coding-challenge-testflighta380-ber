<?php
namespace model\gui\cli\material;

use model\gui\cli\AbstractCli;
use interfaces\model\data\material\MaterialInterface;
use interfaces\model\data\position\PositionInterface;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractMaterial extends AbstractCli implements MaterialInterface
{

    /**
     * @var MaterialInterface
     */
    protected $origin;
    
    /**
     * The message which will be send by the initialization of the object
     * @var string 
     */
    protected $initializationMessage ='Material initialized.';

    /**
     *
     * @param MaterialInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(MaterialInterface $origin, ?PrintRepositoryInterface $repository = NULL)
    {
        parent::__construct($origin, $repository);
        $this->initializationMessage();
    }
    
    private function initializationMessage():void{
        $this->repository->addOutput($this->initializationMessage);
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\model\data\material\MaterialInterface::setName()
     */
    public function setName(string $name): void
    {
        $this->repository->addOutput("Name \"$name\" set.");
        $this->origin->setName($name);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\MaterialInterface::getName()
     */
    public function getName(): string
    {
        #$this->repository->addString('Name of "{0}" requested.',[(new \ReflectionClass($this))->getShortName(),$this->origin->getName()]);
        return $this->origin->getName();
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\MaterialInterface::getPosition()
     */
    public function getPosition(): PositionInterface
    {
        $this->repository->addString('Position of "{0} {1}" requested.',[$this->getClassShortName(),$this->origin->getName()]);
        return $this->origin->getPosition();
    }
}
