<?php
namespace controller\airport;

use controller\AbstractController;
use interfaces\model\data\material\building\RunwayInterface;
use interfaces\model\data\material\building\gate\GateInterface;
use controller\airport\exception\NoFreeRunwayException;
use controller\airport\exception\NoFreeGateException;
use interfaces\model\method\material\building\airport\AirportInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AirportController extends AbstractController
{

    /**
     *
     * @var AirportInterface
     */
    protected $airport;

    /**
     * @param AirportInterface $airport
     */
    public function __construct(AirportInterface $airport)
    {
        $this->airport = $airport;
    }

    /**
     * @throws NoFreeRunwayException
     * @return RunwayInterface
     */
    public function getFreeRunway(): RunwayInterface
    {
        /**
         * @var RunwayInterface $runway
         */
        foreach ($this->airport->getRunways()->getValues() as $runway) {
            if ($runway->getVehicles()->isEmpty()) {
                return $runway;
            }
        }
        throw new NoFreeRunwayException();
    }

    /**
     * The Exception catching is just implemented to don't repeat the called functions
     *
     * @return bool
     */
    public function getPermissionToLand(): bool
    {
        try {
            if ($this->getFreeRunway() && $this->getFreeGate()) {
                return true;
            }
        } catch (NoFreeRunwayException $exception) {} catch (NoFreeGateException $exception) {}
        return false;
    }

    /**
     * @throws NoFreeGateException
     * @return GateInterface
     */
    public function getFreeGate(): GateInterface
    {
        /**
         * @var GateInterface $gate
         */
        foreach ($this->airport->getGates()->getValues() as $gate) {
            if (! $gate->getPlane()) {
                return $gate;
            }
        }
        throw new NoFreeGateException();
    }
}


