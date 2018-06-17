<?php
namespace tests\unit\scenario\testflight_a380_ber;

use PHPUnit\Framework\TestCase;
use scenario\TestflightA380Ber\ActorCollection;
use scenario\TestflightA380Ber\CliCollection;
use scenario\TestflightA380Ber\DataCollection;
use interfaces\model\gui\cli\CliInterface;
use interfaces\model\method\material\person\MajorInterface;
use interfaces\model\method\collection\GuestCollectionInterface;
use interfaces\model\method\collection\JournalistCollectionInterface;
use interfaces\model\method\material\vehicle\car\AircraftTractorInterface;
use interfaces\model\method\material\building\airport\AirportInterface;
use interfaces\model\method\material\vehicle\plane\PlaneInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class CliCollectionTest extends TestCase
{

    /**
     *
     * @var ActorCollection
     */
    protected $actors;

    /**
     *
     * @var CliCollection
     */
    protected $cli;

    protected function setUp(): void
    {
        $this->actors = new ActorCollection(new DataCollection());
        $this->cli = new CliCollection($this->actors);
    }

    public function testMajorCli(): void
    {
        $this->assertInstanceOf(CliInterface::class, $this->cli->getMajor());
    }

    public function testGuestCli(): void
    {
        $this->assertInstanceOf(CliInterface::class, $this->cli->getGuests());
    }

    public function testJournalistsCli(): void
    {
        $this->assertInstanceOf(CliInterface::class, $this->cli->getJournalists());
    }

    public function testPlaneCli(): void
    {
        $this->assertInstanceOf(CliInterface::class, $this->cli->getPlane());
    }

    public function testAircraftTractorCli(): void
    {
        $this->assertInstanceOf(CliInterface::class, $this->cli->getAircraftTractor());
    }

    public function testAirportCli(): void
    {
        $this->assertInstanceOf(CliInterface::class, $this->cli->getAirport());
    }

    public function testMajorMethod(): void
    {
        $this->assertInstanceOf(MajorInterface::class, $this->cli->getMajor());
    }

    public function testGuestMethod(): void
    {
        $this->assertInstanceOf(GuestCollectionInterface::class, $this->cli->getGuests());
    }

    public function testJournalistsMethod(): void
    {
        $this->assertInstanceOf(JournalistCollectionInterface::class, $this->cli->getJournalists());
    }

    public function testPlaneMethod(): void
    {
        $this->assertInstanceOf(PlaneInterface::class, $this->cli->getPlane());
    }

    public function testAircraftTractorMethod(): void
    {
        $this->assertInstanceOf(AircraftTractorInterface::class, $this->cli->getAircraftTractor());
    }

    public function testAirportMethod(): void
    {
        $this->assertInstanceOf(AirportInterface::class, $this->cli->getAirport());
    }
}
