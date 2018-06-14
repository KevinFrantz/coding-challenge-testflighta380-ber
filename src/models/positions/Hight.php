<?php
namespace models\positions;

use models\AbstractPosition;
use interfaces\models\positions\HightInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Hight extends AbstractPosition implements HightInterface
{
    protected $hight;
    
    public function __construct(float $hight=0.0){
        $this->setHightOverSealevelInMeters($hight);
    }
    
    public function setHightOverSealevelInMeters(float $hight): void
    {
        $this->hight=$hight;
    }

    public function getHightOverSealevelInMeters(): float
    {
        return $this->hight;
    }

}

