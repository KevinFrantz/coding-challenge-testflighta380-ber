<?php
namespace model\gui\cli\material\building;

use model\gui\cli\material\AbstractMaterial;
use interfaces\model\method\material\building\BuildingInterface;
use interfaces\repository\output\PrintRepositoryInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
class AbstractBuilding extends AbstractMaterial implements BuildingInterface
{
    /**
     * @var string
     */
    protected $initializationMessage = 'Building created';
    
    /**
     * @var BuildingInterface
     */
    protected $origin;
    
    /**
     * @param BuildingInterface $origin
     * @param PrintRepositoryInterface $repository
     */
    public function __construct(BuildingInterface $origin, ?PrintRepositoryInterface $repository=NULL){
        parent::__construct($origin, $repository);
    }
}