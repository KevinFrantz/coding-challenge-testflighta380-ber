<?php
namespace interfaces\repository\output;

use interfaces\repository\RepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
interface OutputRepositoryInterface extends RepositoryInterface
{
    public function addOutput($output):void;
 
    public function getOutput();
}

