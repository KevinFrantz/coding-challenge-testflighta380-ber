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
abstract class MoveController extends AbstractController implements MoveControllerInterface
{
    protected $movingElement;
    
    protected $target;
    
    public function __construct(MovingInterface $movingElement){
        $this->movingElement = $movingElement;
    }
    
    public function getMovingElement(): MovingInterface
    {
        return $this->movingElement;
    }
}

