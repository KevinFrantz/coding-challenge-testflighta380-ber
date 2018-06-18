<?php
namespace scenario\TestflightA380Ber;

use scenario\AbstractScenario;
use interfaces\scenario\model\actor\TestflightA380Ber as ActorsTestflightA380Ber;
use interfaces\repository\output\PrintRepositoryInterface;
use repository\output\PrettyPrintRepositoy;
use model\gui\cli\collection\GuestCollection;

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
        $this->repository = new PrettyPrintRepositoy();
        $this->repository->addHeadline('Initialization of objects...');
        $data = new DataCollection();
        $actors = new ActorCollection($data);
        $this->actors = new CliCollection($actors,$this->repository);
    }

    public function play(): void
    {
        $this->repository->addHeadline('Play "{0}" starts.', [
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
        $this->repository->addSubHeadline(
            'Plane {0} is flying to "{1}"', 
            [$this->actors->getPlane()->getName(),$this->actors->getAirport()->getName()]
            );
        $this->actors->getPlane();
        $this->actors->getPlane()->moveTo($this->actors->getAirport());
    }

    private function waitForLandingPermission(): void
    {
        do {
            $this->repository->addSubHeadline("Plane {0} is waiting for permission to land...", [
                $this->actors->getPlane()
                    ->getName()
            ]);
        } while (! $this->actors->getAirport()
            ->getTower()
            ->getPermissionToLand());
    }

    private function land(): void
    {
        $this->repository->addSubHeadline('Landing procedure starts...');
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
        $this->repository->addSubHeadline('Moving plane to gate procedure starts...');
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
        $this->repository->addString('Plane "{0}" arrived at Terminal', [
            $plane->getName()
        ]);
    }

    /**
     * This function is not clean implemented
     */
    private function moveOverGateToTerminal(): void
    {
        $this->repository->addSubHeadline('Guests move to terminal...');
        /**
         * @var GuestCollection
         */
        $guests = $this->actors->getPlane()->getPassengers();
        foreach ($guests as $guest){
            $guest->setPosition($this->actors->getAirport()->getGates()->get(0)->getPosition());
        }
        foreach ($guests as $guest){
            $guest->setPosition($this->actors->getAirport()->getTerminal()->getPosition());
        }
        $this->repository->addOutput('Guests arrive in terminal.');
    }

    /**
     * This function is not clean implemented
     */
    private function publicWelcome(): void
    {
        $this->repository->addSubHeadline('Public welcome starts...');
        $this->actors->getMajor()->publicWelcome();
        $this->actors->getJournalists()->publicWelcome();
    }
}
