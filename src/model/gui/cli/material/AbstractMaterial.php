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
     *
     * @param MaterialInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(MaterialInterface $origin, ?PrintRepositoryInterface $repository = NULL)
    {
        parent::__construct($origin, $repository);
        $this->repository->addOutput('Material "' . $this->origin->getName() . '" initialized.');
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
        $name = $this->origin->getName();
        $this->repository->addOutput("Name \"$name\" requested.");
        return $name;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\material\MaterialInterface::getPosition()
     */
    public function getPosition(): PositionInterface
    {
        $position = $this->origin->getPosition();
        $this->repository->addOutput('Position of ' . $this->origin->getName() . ' requested.');
        return $position;
    }
}
