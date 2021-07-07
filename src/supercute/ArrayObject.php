<?php


namespace supercute;

use supercute\Contacts\Arrayble;
use supercute\Traits\ArrayFunctions;

class ArrayObject implements Arrayble
{
    use ArrayFunctions;

    public ?array $array;
    public ?bool $boolean;
    public $mixed;

    /**
     * ArrayObject constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * @param array $array
     * @return ArrayObject
     */
    public static function take(array $array): ArrayObject
    {
        return new self($array);
    }

    /**
     * @return mixed
     */
    public function flush()
    {
        foreach ($this as $value) {
            if ($value) {
                return $value;
            }
        }
    }
}
