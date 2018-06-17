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
    
    /**
     * This function allows you to add variables to your string 
     * helpfull e.g. for translation repositories
     * @param string $output
     * @param array $variables
     */
    public function addVarOutput(string $output,array $variables):void;
}

