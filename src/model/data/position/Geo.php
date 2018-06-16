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

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @param float $longitude
     * @param float $latitude
     */
    public function __construct(float $longitude = 0.0, float $latitude = 0.0)
    {
        $this->setLatitude($latitude);
        $this->setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\position\GeoInterface::getLongitude()
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\position\GeoInterface::getLatitude()
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\position\GeoInterface::setLatitude()
     */
    public function setLatitude(float $latitude): void
    {
        if ($latitude >= - 90 && $latitude <= + 90) {
            $this->latitude = $latitude;
            return;
        }
        throw new \Exception("You entered an unvalid number!");
    }

    /**
     * {@inheritDoc}
     * @see \interfaces\model\data\position\GeoInterface::setLongitude()
     */
    public function setLongitude(float $longitude): void
    {
        if ($longitude >= - 90 && $longitude <= + 90) {
            $this->longitude = $longitude;
            return;
        }
        throw new \Exception("You entered an unvalid number!");
    }
}

