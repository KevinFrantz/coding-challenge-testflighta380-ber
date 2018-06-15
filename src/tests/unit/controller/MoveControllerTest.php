<?php
namespace tests\unit\controller;

use controller\MoveController;
use PHPUnit\Framework\TestCase;

/**
 *
 * @author kevinfrantz
 *        
 */
class MoveControllerTest extends TestCase
{
    protected $controller;
    
    protected function setUp(){
        $this->controller = new MoveController();
    }
}

