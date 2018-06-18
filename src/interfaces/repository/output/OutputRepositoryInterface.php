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
    /**
     * Adds output to the repository
     * @param mixed $output
     */
    public function addOutput($output):void;
 
    /**
     * Returns the output elements
     * @return mixed
     */
    public function getOutput();
}

