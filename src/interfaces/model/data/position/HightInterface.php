<?php
namespace interfaces\model\data\position;

/**
 *
 * @author kevinfrantz
 *        
 */
interface HightInterface extends PositionInterface
{
    public function setHightOverSealevelInMeters(float $hight):void;
    
    public function getHightOverSealevelInMeters():float;
}

