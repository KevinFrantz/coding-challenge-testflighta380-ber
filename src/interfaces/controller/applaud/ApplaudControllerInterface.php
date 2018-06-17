<?php
namespace interfaces\controller\applaud;

use interfaces\controller\ControllerInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface ApplaudControllerInterface extends ControllerInterface
{
    public function getApplaudString():string;
}

