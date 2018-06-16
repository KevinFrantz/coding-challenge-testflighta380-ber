<?php
namespace model\gui\cli;

use model\gui\AbstractGui;
use interfaces\model\gui\GuiInterface;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractCli extends AbstractGui implements GuiInterface
{
    /**
     * @var PrintRepositoryInterface
     */
    protected $repository;
}

