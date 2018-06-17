<?php
namespace model\gui\cli;

use model\gui\AbstractGui;
use interfaces\repository\output\PrintRepositoryInterface;
use interfaces\model\gui\cli\CliInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractCli extends AbstractGui implements CliInterface
{
    /**
     * @var PrintRepositoryInterface
     */
    protected $repository;
}

