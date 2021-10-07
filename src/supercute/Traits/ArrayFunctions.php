<?php


namespace supercute\Traits;

use supercute\ArrayObject;

/**
 * Trait ArrayFunction
 * @codingStandardsIgnoreStart PSR1.Methods.CamelCapsMethodName.NotCamelCaps
 * @package supercute\ArrayObject\Traits
 */
trait ArrayFunctions
{
    /**
     * @return \Traversable
     */
    abstract public function getIterator(): \Traversable;

    /**
     * @param int $case
     * @return ArrayFunctions
     */
    public function changeKeyCase(int $case = CASE_LOWER)
    {
        $generator = function ($array) use ($case) {
            foreach ($array as $key => $value) {
                if ($case === CASE_LOWER) {
                    yield strtolower($key);
                } else {
                    yield strtoupper($key);
                }
            }
        };

        foreach ($generator((array) $this->getIterator()) as $key => $value) {
            $array[$key] = $value;
        }

        return $this->getObjectFromArray($array);
    }

    /**
     * @param int $length
     * @param bool $preserve_keys
     */
    public function chunk(int $length, bool $preserve_keys = false)
    {
        $generator = function ($array) use ($length) {
            for ($i = 0, $iMax = count($array); $i <= $iMax; $i += $length) {
                yield array_slice($array, $i, $length);
            }
        };

        $array = [];

        foreach ($generator((array) $this->getIterator()) as $key => $value) {
            $array[$key] = $value;
        }

        return $this->getObjectFromArray($array);
    }

    /**
     * @param $column_key
     * @param null $index_key
     * @return ArrayFunctions
     */
    public function column($column_key, $index_key = null)
    {
        return $this->getObjectFromArray(array_column((array)$this->getIterator(), $column_key, $index_key));
    }

    /**
     * @param array $array
     * @param bool $isKeys
     */
    public function combine(array $array, bool $isKeys = false)
    {
       return $this->getObjectFromArray(
           $isKeys ? array_combine($array, (array)$this->getIterator()) : array_combine((array)$this->getIterator(), $array)
       );
    }

    public function countValues()
    {
         return $this->getObjectFromArray(array_count_values((array)$this->getIterator()));
    }

    /**
     * @param array ...$arrays
     */
    public function diffAssoc(array ...$arrays)
    {
        return $this->getObjectFromArray(array_diff_assoc(...$arrays));
    }

    /**
     * @param array ...$arrays
     */
    public function diffKey(array ...$arrays)
    {
       return $this->getObjectFromArray(array_diff_key((array)$this->getIterator(), ...$arrays));
    }

    /**
     * @param callable $keyCompareFunc
     * @param array ...$arrays
     * @return ArrayFunctions
     */
    public function diffUassoc(callable $keyCompareFunc, array ...$arrays)
    {
        return $this->getObjectFromArray(array_diff_uassoc((array)$this->getIterator(), $arrays, $keyCompareFunc));
    }

    /**
     * @param callable $keyCompareFunc
     * @param array ...$arrays
     */
    public function diffUkey(callable $keyCompareFunc, array ...$arrays)
    {
        return $this->getObjectFromArray(array_diff_ukey((array)$this->getIterator(), $arrays, $keyCompareFunc));
    }

    /**
     * @param array ...$arrays
     */
    public function diff(array ...$arrays)
    {
       return $this->getObjectFromArray(array_diff((array)$this->getIterator(), $arrays));
    }

    /**
     * @param $value
     */
    public function fillKeys($value)
    {
        return $this->getObjectFromArray(array_keys((array)$this->getIterator(), $value));
    }

    /**
     * @param int $startIndex
     * @param int $count
     * @param $value
     */
    public function fill(int $startIndex, int $count, $value)
    {
        return $this->getObjectFromArray(array_fill($startIndex, $count, $value));
    }

    /**
     * @param callable|null $callback
     * @param int $mode
     */
    public function filter(callable $callback = null, int $mode = 0)
    {
        return $this->getObjectFromArray(array_filter((array) $this->getIterator(), $callback, $mode));
    }

    public function flip()
    {
       return $this->getObjectFromArray(array_flip((array) $this->getIterator()));
    }

    /**
     * @param array ...$arrays
     */
    public function intersectAssoc(array ...$arrays)
    {
       return $this->getObjectFromArray(array_intersect_assoc((array) $this->getIterator(), $arrays));
    }

    /**
     * @param array ...$arrays
     */
    public function intersectKey(array ...$arrays)
    {
       return $this->getObjectFromArray(array_intersect_key((array) $this->getIterator(), $arrays));
    }

    /**
     * @param callable $keyCompareFunc
     * @param array ...$arrays
     */
    public function intersectUassoc(callable $keyCompareFunc, array ...$arrays)
    {
        return $this->getObjectFromArray(array_intersect_uassoc((array) $this->getIterator(), $arrays, $keyCompareFunc));
    }

    /**
     * @param callable $keyCompareFunc
     * @param array ...$arrays
     */
    public function intersectUkey(callable $keyCompareFunc, array ...$arrays)
    {
        return $this->getObjectFromArray(array_intersect_key((array) $this->getIterator(), $arrays, $keyCompareFunc));
    }

    /**
     * @param array ...$arrays
     */
    public function intersect(array ...$arrays)
    {
       return $this->getObjectFromArray(array_intersect((array) $this->getIterator(), $arrays));
    }

    /**
     * @param $key
     * @return bool
     */
    public function keyExists($key): bool
    {
        return array_key_exists($key, (array) $this->getIterator());
    }


    public function keyFirst()
    {
       return array_key_first((array) $this->getIterator());
    }

    /**
     * @return int|string
     */
    public function keyLast()
    {
        return array_key_last((array) $this->getIterator());
    }

    /**
     * @param $searchValue
     * @param bool $strict
     */
    public function keys($searchValue, bool $strict = false)
    {
        return $this->getObjectFromArray(array_keys((array) $this->getIterator(), $searchValue, $strict));
    }

    /**
     * @param callable $callback
     * @param array ...$arrays
     */
    public function map(callable $callback, array ...$arrays)
    {
        $generator = function (...$arrays) use ($callback) {
            foreach ($arrays as $array) {
                foreach ($array as $value) {
                    yield $callback($value);
                }
            }
        };

        $array = [];

        foreach ($generator((array) $this->getIterator(), $arrays) as $key => $value) {
           $array[$key] = $value;
        }

        return $this->getObjectFromArray($array);
    }

    /**
     * @param array ...$arrays
     */
    public function mergeRecursive(array ...$arrays)
    {
       return $this->getObjectFromArray(array_merge_recursive((array) $this->getIterator(), ...$arrays));
    }

    /**
     * @param array ...$arrays
     */
    public function merge(array ...$arrays)
    {
       return $this->getObjectFromArray(array_merge((array) $this->getIterator(), ...$arrays));
    }

    /**
     * @param int $arraySortOrder
     * @param int $arraySortflags
     * @param mixed ...$rest
     * @return bool
     */
    public function multisort(int $arraySortOrder = SORT_ASC, int $arraySortflags = SORT_REGULAR, ...$rest): bool
    {
       return array_multisort((array) $this->getIterator(), $arraySortOrder, $arraySortflags, $rest);
    }

    /**
     * @param int $lenght
     * @param $value
     */
    public function pad(int $lenght, $value)
    {
        return $this->getObjectFromArray(array_pad((array) $this->getIterator(), $lenght, $value));
    }

    /**
     * @return mixed|null
     */
    public function pop()
    {
        $array = (array)$this->getIterator();
        return array_pop($array);
    }


    /**
     * @return float|int
     */
    public function product()
    {
        return array_product((array) $this->getIterator());
    }

    /**
     * @param mixed ...$values
     * @return int
     */
    public function push(...$values): int
    {
        $array = (array)$this->getIterator();
        return array_push($array, ...$values);
    }

    /**
     * @param int $num
     */
    public function rand(int $num = 1)
    {
        $result = array_rand((array) $this->getIterator(), $num);

        if (is_array($result)) {
            return $this->getObjectFromArray($result);
        }

        return $result;
    }

    /**
     * @param callable $callback
     * @param null $initial
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null)
    {
        return array_reduce((array) $this->getIterator(), $callback, $initial);
    }

    /**
     * @param array ...$replacements
     */
    public function replaceRecursive(array ...$replacements)
    {
        return $this->getObjectFromArray(array_replace_recursive((array) $this->getIterator(), $replacements));
    }

    /**
     * @param array ...$replacements
     */
    public function replace(array ...$replacements)
    {
        return $this->getObjectFromArray(array_replace((array) $this->getIterator(), $replacements));
    }

    /**
     * @param bool $preserve_keys
     */
    public function reverse(bool $preserve_keys = false)
    {
        return $this->getObjectFromArray(array_reverse((array) $this->getIterator(), $preserve_keys));
    }

    /**
     * @param $needle
     * @param bool $strict
     * @return int|string|false
     */
    public function search($needle, bool $strict = false)
    {
        return array_search($needle, (array) $this->getIterator(), $strict);
    }

    /**
     * @return mixed|null
     */
    public function shift()
    {
        $array = (array)$this->getIterator();
        return array_shift($array);
    }

    /**
     * @param int $offset
     * @param int|null $length
     * @param bool $preserveKeys
     */
    public function slice(int $offset, ?int $length = null, bool $preserveKeys = false)
    {
        return $this->getObjectFromArray(array_slice((array) $this->getIterator(), $offset, $length, $preserveKeys));
    }

    /**
     * @param int $offset
     * @param int|null $length
     * @param array $replacements
     */
    public function splice(int $offset, ?int $length = null, array $replacements)
    {
        $array = (array)$this->getIterator();
        return $this->getObjectFromArray(array_splice($array, $offset, $length, $replacements));
    }

    /**
     * @return float|int
     */
    public function sum()
    {
        return array_sum((array) $this->getIterator());
    }

    /**
     * @param callable $valueCompareFunc
     * @param array ...$arrays
     */
    public function udiffAssoc(callable $valueCompareFunc, array ...$arrays)
    {
        return $this->getObjectFromArray(array_udiff_assoc((array) $this->getIterator(), $arrays, $valueCompareFunc));
    }

    /**
     * @param callable $valueCompareFunc
     * @param callable $keyCompareFunc
     * @param array ...$arrays
     * @return ArrayFunctions
     */
    public function udiffUassoc(callable $valueCompareFunc, callable $keyCompareFunc, array ...$arrays)
    {
       return $this->getObjectFromArray(array_udiff_uassoc((array) $this->getIterator(), $arrays, $valueCompareFunc, $keyCompareFunc));
    }

    /**
     * @param callable $valueCompareFunc
     * @param array ...$arrays
     */
    public function udiff(callable $valueCompareFunc, array ...$arrays)
    {
        return $this->getObjectFromArray(array_udiff((array) $this->getIterator(), $arrays, $valueCompareFunc));
    }

    /**
     * @param callable $valueCompareFunc
     * @param array ...$arrays
     * @return ArrayFunctions
     */
    public function uintersectAssoc(callable $valueCompareFunc, array ...$arrays)
    {
        return $this->getObjectFromArray(array_uintersect_assoc((array) $this->getIterator(), $arrays, $valueCompareFunc));
    }

    /**
     * @param callable $valueCompareFunc
     * @param callable $keyCompareFunc
     * @param array ...$arrays
     */
    public function uintersectUassoc(callable $valueCompareFunc, callable $keyCompareFunc, array ...$arrays)
    {
        return $this->getObjectFromArray(array_uintersect_uassoc((array) $this->getIterator(), $arrays, $valueCompareFunc, $keyCompareFunc));
    }

    /**
     * @param callable $valueCompareFunc
     * @param array ...$arrays
     */
    public function uintersect(callable $valueCompareFunc, array ...$arrays)
    {
        return $this->getObjectFromArray(array_uintersect((array) $this->getIterator(), $arrays, $valueCompareFunc));
    }

    /**
     * @param int $flags
     */
    public function unique(int $flags = SORT_STRING)
    {
        return $this->getObjectFromArray(array_unique((array) $this->getIterator(), $flags));
    }

    /**
     * @param ...$values
     */
    public function unshift(...$values)
    {
        $array = (array)$this->getIterator();
        array_unshift($array, $values);
        return $this->getObjectFromArray($array);
    }

    public function values()
    {
        return $this->getObjectFromArray(array_values((array) $this->getIterator()));
    }

    /**
     * @param callable $callback
     * @param null $userdata
     */
    public function walkRecursive(callable $callback, $userdata = null)
    {
        $array = (array)$this->getIterator();
        array_walk_recursive($array, $callback, $userdata);
        return $this->getObjectFromArray($array);
    }

    /**
     * @param callable $callback
     * @param null $userdata
     */
    public function walk(callable $callback, $userdata = null)
    {
        $array = (array) $this->getIterator();
        array_walk($array, $callback, $userdata);

        return $this->getObjectFromArray($array);
    }

    /**
     * @param int $flags
     */
    public function arsort(int $flags = SORT_REGULAR)
    {
        $array = (array) $this->getIterator();
        arsort($array, $flags);
        return $this->getObjectFromArray($array);
    }

    /**
     * @param int $flags
     */
    public function asort(int $flags = SORT_REGULAR)
    {
        $array = (array) $this->getIterator();
        asort($array, $flags);
        return $this->getObjectFromArray($array);
    }

    /**
     * @return int
     */
    public function count(): int
    {
      return count((array) $this->getIterator());
    }

    /**
     * @param $needle
     * @param bool $strict
     */
    public function inArray($needle, bool $strict = false)
    {
       return in_array($needle, (array) $this->getIterator(), $strict);
    }

    /**
     * @param int $flags
     */
    public function krsort(int $flags = SORT_REGULAR)
    {
        $array = (array) $this->getIterator();
        krsort($array, $flags);
        return $this->getObjectFromArray($array);
    }

    /**
     * @param int $flags
     */
    public function ksort(int $flags = SORT_REGULAR)
    {
        $array = (array) $this->getIterator();
        ksort($array, $flags);
        return $this->getObjectFromArray($array);
    }

    /**
     * @param int $flags
     */
    public function rsort(int $flags = SORT_REGULAR)
    {
        $array = (array) $this->getIterator();
        rsort($array, $flags);
        return $this->getObjectFromArray($array);
    }

    /**
     * @param int $flags
     */
    public function sort(int $flags = SORT_REGULAR)
    {
        $array = (array) $this->getIterator();
        sort($array, $flags);
        return $this->getObjectFromArray($array);
    }

    /**
     * @param callable $callback
     */
    public function uasort(callable $callback)
    {
        $array = (array) $this->getIterator();
        uasort($array, $callback);
        return $this->getObjectFromArray($array);
    }

    /**
     * @param callable $callback
     */
    public function uksort(callable $callback)
    {
        $array = (array) $this->getIterator();
        uksort($array, $callback);
        return $this->getObjectFromArray($array);
    }

    /**
     * @param callable $callback
     */
    public function usort(callable $callback)
    {
        $array = (array) $this->getIterator();
        usort($array, $callback);
        return $this->getObjectFromArray($array);
    }

    /**
     * @param array $array
     */
    private function getObjectFromArray(array $array)
    {
        return new static(new \ArrayObject($array));
    }
}