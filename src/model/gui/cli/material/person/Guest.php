<?php
namespace model\gui\cli\material\person;

use interfaces\model\method\material\person\GuestInterface;
use model\method\material\person\Guest as MethodGuest;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class Guest extends AbstractPerson implements GuestInterface
{
    /**
     * @var MethodGuest
     */
    protected $origin;
    
    public function __construct(MethodGuest $origin, ?PrintRepositoryInterface $repository){
        parent::__construct($origin, $repository);
    }
    
    public function applaud(): void
    {
        $this->repository->addOutput('Person'.$this->origin->getName().' applaudiert.');
    }
}

