<?php
namespace controller\move;

use controller\AbstractController;
use interfaces\controller\move\MoveControllerInterface;
use interfaces\model\method\controller\move\moving\MovingInterface;
use interfaces\model\method\controller\move\target\TargetInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class MoveController extends AbstractController implements MoveControllerInterface
{
    protected $movingElement;
    
    protected $target;
}

