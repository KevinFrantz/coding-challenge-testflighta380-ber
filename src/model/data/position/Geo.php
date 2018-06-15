<?php
namespace model\data\position;

use interfaces\model\data\position\GeoInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
final class Geo extends AbstractPosition implements GeoInterface
{

    private $latitude;

    private $longitude;

    public function __construct(float $longitude = 0.0, float $latitude = 0.0)
    {
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function setLatitude(float $latitude): void
    {
        if ($latitude >= - 90 && $latitude <= + 90) {
            $this->latitude = $latitude;
            return;
        }
        throw new \Exception("You entered an unvalid number!");
    }

    public function setLongitude(float $longitude): void
    {
        if ($longitude >= - 90 && $longitude <= + 90) {
            $this->longitude = $longitude;
            return;
        }
        throw new \Exception("You entered an unvalid number!");
    }
}

