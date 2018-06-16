<?php
namespace repository\output;

use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class PrintRepository extends AbstractOutputRepository implements PrintRepositoryInterface
{
    /**
     * {@inheritDoc}
     * @see \interfaces\repository\output\PrintRepositoryInterface::printOutput()
     */
    public function printOutput(): void
    {
        foreach ($this->outputElements->getValues() as $outputElement){
            print($outputElement);            
        }
    }

}
