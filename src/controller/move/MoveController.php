<?php
namespace controller\move;

use controller\AbstractController;
use interfaces\controller\move\MoveControllerInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class MoveController extends AbstractController implements MoveControllerInterface
{
    protected $movingElement;
    
    protected $target;
}

