<?php
namespace interfaces\repository\output;

/**
 *
 * @author kevinfrantz
 *        
 */
interface PrintRepositoryInterface extends OutputRepositoryInterface
{
    public function printOutput():void;
}

