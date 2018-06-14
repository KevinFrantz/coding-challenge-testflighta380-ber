<?php
namespace models\positions;

use models\AbstractPosition;
use interfaces\models\positions\SkyInterface;
use models\locations\Hight;

/**
 *
 * @author kevinfrantz
 *        
 */
final class Sky extends AbstractPosition implements SkyInterface
{
    protected $hight;
    
    protected $geo;
    
    public function __construct($longitude=0.0,$latitude=0.0,$hight){
        $this->hight = new Hight($hight);
        $this->geo= new Geo($longitude,$latitude);
    }

    public function getHightOverSealevelInMeters(): float
    {
        return $this->hight->getHightOverSealevelInMeters();
    }

    public function getLatitude(): float
    {
        return $this->geo->getLatitude();
    }
    public function setLatitude(float $latitude): void
    {
        $this->geo->setLatitude($latitude);
    }

    public function getLongitude(): float
    {
        return $this->geo->getLongitude();
    }

    public function setHightOverSealevelInMeters(float $hight): void
    {
        $this->hight->setHightOverSealevelInMeters($hight);
    }

    public function setLongitude(float $longitude): void
    {
        $this->geo->setLongitude($longitude);   
    }
}

