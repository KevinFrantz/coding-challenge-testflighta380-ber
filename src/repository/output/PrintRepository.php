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
            print($outputElement."\n");            
        }
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\repository\output\PrintRepositoryInterface::addString()
     */
    public function addString(string $output, ?array $variables=[]): void
    {
        foreach($variables as $key => $value){
            $output = str_replace('{'.strtoupper($key).'}', $value, $output);
        }
        $this->addOutput($output);
    }


}
