<?php
namespace interfaces\models\positions;

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

