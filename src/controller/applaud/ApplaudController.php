<?php
namespace controller\applaud;

use controller\AbstractController;

use interfaces\controller\applaud\ApplaudControllerInterface;
use interfaces\model\method\applaud\ApplaudInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class ApplaudController extends AbstractController implements ApplaudControllerInterface
{
    private $actor;
    
    public function __construct(ApplaudInterface $actor){
        $this->actor = $actor;
    }
    
    public function applaud(): void
    {
        $this->actor->applaud();
    }
}

