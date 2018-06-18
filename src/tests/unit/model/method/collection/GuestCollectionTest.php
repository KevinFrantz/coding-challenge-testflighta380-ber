<?php
namespace tests\unit\model\method\collection;

use PHPUnit\Framework\TestCase;
use interfaces\model\data\collection\GuestCollectionInterface;
use model\method\collection\GuestCollection;
use model\data\material\person\Guest;
use model\data\position\Sky;

/**
 *
 * @author kevinfrantz
 *        
 */
class GuestCollectionTest extends TestCase
{

    /**
     *
     * @var GuestCollectionInterface
     */
    protected $origin;

    /**
     * @var GuestCollection
     */
    protected $collection;

    /**
     * @var Guest
     */
    protected $firstGuest;
    
    protected function setUp(): void
    {
        $this->firstGuest = new Guest();
        $this->firstGuest->setPosition(new Sky());
        $this->origin = new \model\data\collection\GuestCollection([
            $this->firstGuest,
            new Guest(),
            new Guest()
        ]);
        $this->collection = new GuestCollection($this->origin);
    }
    
    public function testPositionGetter(){
        $this->assertEquals($this->firstGuest->getPosition(), $this->collection->getPosition());
    }
}

