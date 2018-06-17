<?php
namespace model\gui\cli;

use model\gui\AbstractGui;
use interfaces\repository\output\PrintRepositoryInterface;
use interfaces\model\gui\cli\CliInterface;
use interfaces\model\data\DataInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractCli extends AbstractGui implements CliInterface
{

    /**
     *
     * @var PrintRepositoryInterface
     */
    protected $repository;

    /**
     * Helpfull meta function for cli classes
     * @param DataInterface $object
     * @return string
     */
    protected function getClassShortName(?object $object = null): string
    {
        return (new \ReflectionClass(($object)?$object:$this))->getShortName();
    }
}

