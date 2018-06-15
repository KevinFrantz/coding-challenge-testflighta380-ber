<?php
namespace interfaces\model\data\position;

/**
 *
 * @author kevinfrantz
 *        
 */
interface HightInterface
{
    public function setHightOverSealevelInMeters(float $hight):void;
    
    public function getHightOverSealevelInMeters():float;
}

