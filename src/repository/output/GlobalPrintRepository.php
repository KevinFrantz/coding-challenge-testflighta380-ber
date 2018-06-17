<?php
namespace repository\output;

use interfaces\repository\output\PrintRepositoryInterface;

/**
 * This Repository containes one instanz of the print Repository.
 * It allows global output e.g. for debugging
 * @author kevinfrantz
 *        
 */
final class GlobalPrintRepository implements PrintRepositoryInterface
{
    /**
     * @var $this
     */
    static $instance;
    
    public function __construct(){
        if(!self::$instance){
            self::$instance = new PrintRepository();
        }
    }
    
    public function printOutput(): void
    {
        self::$instance->printOutput();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\repository\output\OutputRepositoryInterface::addOutput()
     */
    public function addOutput($output): void
    {
        self::$instance->addOutput($output);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\repository\output\OutputRepositoryInterface::getOutput()
     */
    public function getOutput()
    {
        return self::$instance->getOutput();
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\repository\output\PrintRepositoryInterface::addVarOutput()
     */
    public function addVarOutput(string $output, array $variables): void
    {
        self::$instance->addVarOutput($output, $variables);
    }
}

