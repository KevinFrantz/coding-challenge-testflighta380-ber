<?php
namespace model\method\collection;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\Selectable;
use Closure;
use interfaces\model\data\DataInterface;
use interfaces\model\method\MethodInterface;
use interfaces\model\data\collection\CollectionInterface;

/**
 * This is a wrapper class for DataElements on the Method-Layer
 * @author kevinfrantz
 *        
 */
class AbstractCollection extends ArrayCollection implements MethodInterface
{
    /**
     * @var CollectionInterface
     */
    protected $origin;
    
    /**
     * @param CollectionInterface $origin
     */
    public function __construct(DataInterface $origin)
    {
        $this->origin = $origin;
    }
    
    public function next()
    {
        return $this->origin->next();
    }

    public function forAll(Closure $p)
    {
        return $this->origin->forAll($p);
    }

    public function remove($key)
    {
        return $this->origin->remove($key);
    }

    public function current()
    {
        return $this->origin->current();
    }

    public function partition(Closure $p)
    {
        return $this->origin->partition($p);
    }

    public function offsetExists($offset)
    {
        return $this->origin->offsetExists($offset);
    }

    public function slice($offset, $length = null)
    {
        return $this->origin->slice($offset,length);
    }

    public function get($key)
    {
        return $this->origin->get($key);
    }

    public function offsetUnset($offset)
    {
        return $this->origin->offsetUnset($offset);
    }

    public function toArray()
    {
        return $this->origin->toArray();
    }

    public function map(Closure $func)
    {
       return $this->origin->map($func);
    }

    public function indexOf($element)
    {
        return $this->origin->indexOf($element);
    }

    public function key()
    {
        return $this->origin->key();
    }

    public function add($element)
    {
        return $this->origin->add($element);
    }

    public function offsetGet($offset)
    {
        return $this->origin->offsetGet($offset);
    }

    public function set($key, $value)
    {
        return $this->origin->set($key, $value);
    }

    public function getValues()
    {
        return $this->origin->getValues();
    }

    public function last()
    {
        return $this->origin->last(); 
    }

    public function containsKey($key)
    {
        return $this->origin->containsKey($key);
    }

    public function clear()
    {
        return $this->origin->clear();
    }

    public function isEmpty()
    {
        return $this->origin->isEmpty();
    }

    public function count()
    {
        return $this->origin->count();
    }

    public function getKeys()
    {
        return $this->origin->getKeys();
    }

    public function offsetSet($offset, $value)
    {
        return $this->origin->offsetSet($offset, $value);
    }

    public function filter(Closure $p)
    {
        return $this->origin->filter($p);
    }

    public function contains($element)
    {
        return $this->origin->contains($element);
    }

    public function getIterator()
    {
        return $this->origin->getIterator();
    }

    public function exists(Closure $p)
    {
        return $this->origin->exists($p);
    }

    public function removeElement($element)
    {
        return $this->origin->removeElement($element);    
    }

    public function first()
    {
        return $this->origin->first();
    }
    
    public function matching(Criteria $criteria)
    {
        return $this->origin->matching($criteria);
    }
}

