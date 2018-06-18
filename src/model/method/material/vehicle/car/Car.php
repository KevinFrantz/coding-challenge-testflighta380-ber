<?php
namespace model\method\material\vehicle\car;

use model\method\material\vehicle\AbstractVehicle;
use interfaces\model\data\material\vehicle\car\CarInterface as DataCarInterface;
use controller\move\DriveController;
use interfaces\model\method\material\vehicle\car\CarInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Car extends AbstractVehicle implements CarInterface
{
    /**
     * @var DataCarInterface
     */
    protected $origin;
    
    /** 
     * @var DriveController
     */
    protected $moveController;
    
    /**
     * @param CarInterface $origin
     */
    public function __construct(DataCarInterface $origin){
        parent::__construct($origin);
        $this->moveController = new DriveController($this);
    }
}

