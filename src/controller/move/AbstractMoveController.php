<?php
namespace controller\move;

use controller\AbstractController;
use interfaces\model\method\move\MovingInterface;
use interfaces\model\method\move\TargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractMoveController extends AbstractController{
    
    protected $movingElement;
    
    protected $target;
    
    public function __construct(MovingInterface $movingElement){
        $this->movingElement = $movingElement;
    }
    
    abstract public function moveTo(TargetInterface $target):void;
    
    public function getMovingElement(): MovingInterface
    {
        return $this->movingElement;
    }
}

