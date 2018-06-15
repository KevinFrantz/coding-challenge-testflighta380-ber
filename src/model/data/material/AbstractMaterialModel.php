<?php
namespace model\data\material;

use model\data\position\AbstractPosition;
use interfaces\model\data\material\MaterialInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
abstract class AbstractMaterialModel implements MaterialInterface
{

    /**
     *
     * @var AbstractPosition
     */
    protected $position;
}

