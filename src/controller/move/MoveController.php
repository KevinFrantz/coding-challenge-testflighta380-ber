<?php
namespace controller\move;

use controller\AbstractController;
use interfaces\controller\move\MoveControllerInterface;
use interfaces\model\method\controller\move\moving\MovingInterface;
use interfaces\model\method\controller\move\target\TargetInterface;
use model\data\material\vehicle\AbstractVehicle;
use model\data\material\AbstractMaterialModel;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class MoveController extends AbstractController implements MoveControllerInterface
{
    protected $movingElement;
    
    protected $target;
    
    public function __construct(AbstractMaterialModel $movingElement){
        $this->movingElement = $movingElement;
    }
    
    public function getMovingElement(): MovingInterface
    {
        return $this->movingElement;
    }
}

