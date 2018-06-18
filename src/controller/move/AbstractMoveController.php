<?php
namespace controller\move;

use controller\AbstractController;
use interfaces\model\method\action\move\MovingInterface;
use interfaces\model\method\action\move\TargetInterface;
use interfaces\controller\move\MoveControllerInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractMoveController extends AbstractController implements MoveControllerInterface{
    
    protected $movingElement;
    
    protected $target;
    
    /**
     * @param MovingInterface $movingElement
     */
    public function __construct(MovingInterface $movingElement){
        $this->movingElement = $movingElement;
    }
    
    abstract public function moveTo(TargetInterface $target):void;
    
    public function getMovingElement(): MovingInterface
    {
        return $this->movingElement;
    }
}

