<?php
namespace interfaces\model\gui;

use interfaces\model\method\MethodInterface;
use interfaces\repository\RepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface GuiInterface extends MethodInterface
{
    public function setRepository(RepositoryInterface $repository);
}

