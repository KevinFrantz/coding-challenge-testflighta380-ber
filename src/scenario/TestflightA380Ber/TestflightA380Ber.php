<?php
namespace scenario\TestflightA380Ber;

use scenario\AbstractScenario;
use interfaces\scenario\model\actor\TestflightA380Ber as ActorsTestflightA380Ber;
use repository\output\GlobalPrintRepository;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 * @todo Implement Pilot for permission to land.
 */
final class TestflightA380Ber extends AbstractScenario
{

    const PLAY_NAME = 'Testflight A390 BER';

    /**
     *
     * @var ActorsTestflightA380Ber
     */
    protected $actors;

    /**
     *
     * @var PrintRepositoryInterface
     */
    protected $repository;

    public function __construct()
    {
        $this->repository = new GlobalPrintRepository();
        $this->repository->addOutput('Initialization of objects...');
        $data = new DataCollection();
        $actors = new ActorCollection($data);
        $this->actors = new CliCollection($actors);
    }

    public function play(): void
    {
        $this->repository->addVarOutput('Play "{0}" starts.', [
            self::PLAY_NAME
        ]);
        $this->flyToAirport();
        $this->waitForLandingPermission();
        $this->land();
        $this->moveToGate();
        $this->moveOverGateToTerminal();
        $this->publicWelcome();
    }

    public function print(): void
    {
        $this->repository->printOutput();
    }

    private function flyToAirport(): void
    {
        $this->actors->getPlane();
    }

    private function waitForLandingPermission(): void
    {
        do {
            $this->repository->addVarOutput("Plane {0} is waiting for permission to land...", [
                $this->actors->getPlane()
                    ->getName()
            ]);
        } while (! $this->actors->getAirport()
            ->getTower()
            ->getPermissionToLand());
    }

    private function land(): void
    {
        $this->repository->addOutput('Landing procedure starts...');
        $landingTarget = $this->actors->getAirport()
            ->getTower()
            ->getFreeRunway();
        do {
            $this->repository->addOutput('landing...');
            $this->actors->getPlane()->moveTo($landingTarget);
        } while ($this->actors->getPlane()->getPosition() != $landingTarget->getPosition());
        $this->repository->addOutput('Plane landet.');
        $this->actors->getGuests()->applaud();
    }

    private function moveToGate(): void
    {
        $this->repository->addOutput('Moving plane to gate procedure starts...');
        $plane = $this->actors->getPlane();
        $aircraftTractor = $this->actors->getAircraftTractor();
        $aircraftTractor->setPlane($plane);
        $movingTarget = $this->actors->getAirport()
            ->getTower()
            ->getFreeGate();
        
        $aircraftTractor->moveTo($movingTarget);
        do {
            $aircraftTractor->moveTo($movingTarget);
        } while ($plane->getPosition() != $movingTarget->getPosition());
        $this->repository->addVarOutput('Plane "{0}" arrived at Terminal', [
            $plane->getName()
        ]);
    }

    private function moveOverGateToTerminal(): void
    {
        
    }

    private function publicWelcome(): void
    {
        
    }
}
