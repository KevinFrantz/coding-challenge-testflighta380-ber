<?php
namespace tests\unit\model\gui\cli\collections;

use PHPUnit\Framework\TestCase;
use model\data\collection\JournalistCollection as JournalistDataCollection;
use model\method\collection\JournalistCollection as JournalistMethodCollection;
use model\gui\cli\collection\JournalistCollection;
use model\gui\cli\material\person\Journalist;
use model\data\material\person\Journalist as DataJournalist;

/**
 *
 * @author kevinfrantz
 *        
 */
class JournalistCollectionTest extends TestCase
{

    /**
     *
     * @var JournalistCollection
     */
    protected $journalists;

    protected function setUp(): void
    {
        $this->journalists = new JournalistCollection(new JournalistMethodCollection(new JournalistDataCollection([
            new DataJournalist()
        ])));
    }

    public function testFirstElement()
    {
        $this->assertInstanceOf(Journalist::class, $this->journalists->get(0));
    }
}

