<?php


namespace supercute;

use supercute\Contacts\Arrayble;
use supercute\Traits\ArrayFunctions;

/**
 * Class for use array function as Object
 * @package ArrayObject
 * @author Danil Shumskikh <d@shumskikh.ru>
 * @version 1.0
 * @access public
 */
final class ArrayObject implements Arrayble
{
    private \Traversable $iterator;

    use ArrayFunctions;

    /**
     * ArrayObject constructor.
     * @param \Traversable $iterator
     */
    public function __construct(\Traversable $iterator)
    {
        $this->iterator = $iterator;
    }

    /**
     * @param \Traversable $iterator
     * @return ArrayObject
     */
    public static function take(\Traversable $iterator): ArrayObject
    {
        return new self($iterator);
    }

    /**
     * @param array $array
     * @return ArrayObject
     */
    public static function fromArray(array $array): ArrayObject
    {
        return new self(new \ArrayObject($array));
    }

    /**
     * @return array
     */
    public function flush(): array
    {
        return iterator_to_array($this->iterator, false);
    }

    /**
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        return $this->iterator;
    }
}
