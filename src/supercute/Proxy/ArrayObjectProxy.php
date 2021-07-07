<?php


namespace supercute\Proxy;

use supercute\ArrayObject;
use supercute\Contacts\Arrayble;
use supercute\Traits\ArrayFunctions;

class ArrayObjectProxy implements Arrayble
{
    use ArrayFunctions;

    private ArrayObject $object;

    public function __construct(ArrayObject $object)
    {
        $this->object = $object;
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return ArrayObject
     * @throws \Exception
     */
    public function __call(string $name, array $arguments): ArrayObject
    {
        if (method_exists(Arrayble::class, $name)) {
            $this->checkEmptyArray();

            call_user_func_array([$this->object, $name], $arguments);
        }

        return $this->object->flush();
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function &__get(string $name)
    {
        return $this->object->$name;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set(string $name, $value)
    {
        $this->object->$name = $value;
        return $this->object;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset(string $name)
    {
        return method_exists($this->object, $name);
    }

    private function checkEmptyArray(): void
    {
        if (!$this->object->array) {
            throw new \InvalidArgumentException("Empty array, check previous function call result");
        }
    }
}
