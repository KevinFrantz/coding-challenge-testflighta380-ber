<?php
namespace repository\output;

/**
 * This class allows you to print nice stuff on the cli.
 * BE AWARE THAT THIS CLASS CONTAINES MULTIPLE LAZY LOADING FUNCTIONS!
 * @author kevinfrantz
 *        
 */
class PrettyPrintRepositoy extends PrintRepository
{
    const FRAME_WIDTH = 90;
    
    /**
     * This attribute is defined by lazy loading. 
     * @var string
     */
    protected $line = '';
    
    /**
     * This attribute is defined by lazy loading.
     * @var string
     */
    protected $wave = '';
    
    /**
     * @param string $output
     * @param array $values
     */
    public function addHeadline(string $output,array $values=[]):void{
        $this->linebreak();
        $this->addLine();
        $this->addString($output,$values);
        $this->addLine();
    }
    
    /**
     * @param string $output
     * @param array $values
     */
    public function addSubheadLine(string $output,array $values=[]):void{
        $this->linebreak();
        $this->addString($output, $values);
        $this->addWave();
    }
    
    public function addWave():void{
        if($this->wave === ''){
            $this->setWave();
        }
        $this->addOutput($this->wave);
    }
    
    public function linebreak():void{
        $this->addOutput('');
    }
        
    public function addLine():void{
        if($this->line === ''){
            $this->setLine();
        }
        $this->addOutput($this->line);
    }
    
    private function setLine():void{
        $this->line='';
        for ($i = 1; $i <= self::FRAME_WIDTH; $i++) {
            $this->line .= '-';
        }
    }
    
    
    private function setWave():void{
        $this->wave='';
        for ($i = 1; $i <= self::FRAME_WIDTH; $i++) {
            $this->wave .= '~';
        }
    }
    
}

