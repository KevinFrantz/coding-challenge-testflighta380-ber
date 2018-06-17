<?php
namespace model\gui\cli\material\person;

use interfaces\model\method\material\person\GuestInterface;
use model\method\material\person\Guest as MethodGuest;
use interfaces\repository\output\PrintRepositoryInterface;
use controller\applaud\ApplaudController;

/**
 *
 * @author kevinfrantz
 *        
 */
class Guest extends Person implements GuestInterface
{
    /**
     * @var string
     */
    protected $initializationMessage = 'Guest created';
    
    /**
     * @var MethodGuest
     */
    protected $origin;
    
    /**
     * @var ApplaudController
     */
    protected $applaudController;
    
    /**
     * @param MethodGuest $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(MethodGuest $origin, ?PrintRepositoryInterface $repository){
        parent::__construct($origin, $repository);
        $this->applaudController = new ApplaudController();
    }
    
    public function applaud(): void
    {
        $this->repository->addVarOutput(
            'Person {0} applaud: {1}',
            [
                $this->origin->getName(),
                $this->applaudController->getApplaudString()
            ]
            );
    }
}

