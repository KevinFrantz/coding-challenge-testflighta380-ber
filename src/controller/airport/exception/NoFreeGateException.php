<?php
namespace controller\airport\exception;

/**
 *
 * @author kevinfrantz
 *        
 */
class NoFreeGateException extends \Exception
{
    public function __construct(){
        parent::__construct("Ther's no free gate!");
    }
}

