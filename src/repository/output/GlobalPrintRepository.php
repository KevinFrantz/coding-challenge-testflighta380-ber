<?php
namespace repository\output;

/**
 * This Repository containes one instanz of the print Repository.
 * It allows global output e.g. for debugging
 * @author kevinfrantz
 *        
 */
class GlobalPrintRepository extends PrintRepository
{
    /**
     * @var $this
     */
    static $instance;
    
    public function __construct(){
        parent::__construct();
        if(!self::$instance){
            self::$instance = $this;
        }
    }
}

