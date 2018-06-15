<?php
namespace controller\move;

use controller\AbstractController;
use interfaces\controller\move\MoveControllerInterface;
use interfaces\model\method\controller\move\MovingInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractMoveController extends AbstractController{
    
    protected $movingElement;
    
    protected $target;
    
    public function __controller($movingElement){
        $this->movingElement = $movingElement;
    }
    
    abstract public function moveTo($target):void;
    
    public function getMovingElement()
    {
        return $this->movingElement;
    }
}

