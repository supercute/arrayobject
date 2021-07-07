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
    private function checkEmptyArray(): void
    {
        if (!$this->array) {
            throw new \InvalidArgumentException("Empty array, check previous function call result");
        }
    }

    /**
     * @param int $case
     * @return ArrayObject | ArrayFunctions
     */
    public function change_key_case(int $case = CASE_LOWER): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_change_key_case($this->array, $case);
        return $this;
    }

    /**
     * @param int $length
     * @param bool $preserve_keys
     * @return ArrayObject | ArrayFunctions
     */
    public function chunk(int $length, bool $preserve_keys = false): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_chunk($this->array, $length, $preserve_keys);
        return $this;
    }

    /**
     * @param $column_key
     * @param null $index_key
     * @return ArrayObject | ArrayFunctions
     */
    public function column($column_key, $index_key = null): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_column($this->array, $column_key, $index_key);
        return $this;
    }

    /**
     * @param array $array
     * @param bool $isKeys
     * @return ArrayObject | ArrayFunctions
     */
    public function combine(array $array, bool $isKeys = false): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = $isKeys ? array_combine($array, $this->array) : array_combine($this->array, $array);
        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function count_values(): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_count_values($this->array);
        return $this;
    }

    /**
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function diff_assoc(array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_diff_assoc(...$arrays);
        return $this;
    }

    /**
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function diff_key(array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_diff_key($this->array, ...$arrays);
        return $this;
    }

    /**
     * @param callable $key_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function diff_uassoc(callable $key_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_diff_uassoc($this->array, $arrays, $key_compare_func);
        return $this;
    }

    /**
     * @param callable $key_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function diff_ukey(callable $key_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_diff_ukey($this->array, $arrays, $key_compare_func);
        return $this;
    }

    /**
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function diff(array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_diff($this->array, $arrays);
        return $this;
    }

    /**
     * @param $value
     * @return ArrayObject | ArrayFunctions
     */
    public function fill_keys($value): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_keys($this->array, $value);
        return $this;
    }

    /**
     * @param int $start_index
     * @param int $count
     * @param $value
     * @return ArrayObject | ArrayFunctions
     */
    public function fill(int $start_index, int $count, $value): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_fill($start_index, $count, $value);
        return $this;
    }

    /**
     * @param callable|null $callback
     * @param int $mode
     * @return ArrayObject | ArrayFunctions
     */
    public function filter(callable $callback = null, int $mode = 0): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_filter($this->array, $callback, $mode);
        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function flip(): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_flip($this->array);
        return $this;
    }

    /**
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function intersect_assoc(array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_intersect_assoc($this->array, $arrays);
        return $this;
    }

    /**
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function intersect_key(array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_intersect_key($this->array, $arrays);
        return $this;
    }

    /**
     * @param callable $key_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function intersect_uassoc(callable $key_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_intersect_uassoc($this->array, $arrays, $key_compare_func);
        return $this;
    }

    /**
     * @param callable $key_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function intersect_ukey(callable $key_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_intersect_key($this->array, $arrays, $key_compare_func);
        return $this;
    }

    /**
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function intersect(array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_intersect($this->array, $arrays);
        return $this;
    }

    /**
     * @param $key
     * @return ArrayObject | ArrayFunctions
     */
    public function key_exists($key): ArrayObject
    {
        $this->checkEmptyArray();
        $this->boolean = array_key_exists($key, $this->array);
        $this->array = null;

        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function key_first(): ArrayObject
    {
        $this->mixed = array_key_first($this->array);
        $this->array = null;

        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function key_last(): ArrayObject
    {
        $this->checkEmptyArray();
        $this->mixed = array_key_last($this->array);
        $this->array = null;

        return $this;
    }

    /**
     * @param $search_value
     * @param bool $strict
     * @return ArrayObject | ArrayFunctions
     */
    public function keys($search_value, bool $strict = false): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_keys($this->array, $search_value, $strict);
        return $this;
    }

    /**
     * @param callable $callback
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function map(callable $callback, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_map($callback, $this->array, $arrays);
        return $this;
    }

    /**
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function merge_recursive(array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_merge_recursive($this->array, ...$arrays);
        return $this;
    }

    /**
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function merge(array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_merge($this->array, ...$arrays);
        return $this;
    }

    /**
     * @param int $array1_sort_order
     * @param int $array1_sort_flags
     * @param mixed ...$rest
     * @return ArrayObject | ArrayFunctions
     * @throws \Exception
     */
    public function multisort($array1_sort_order = SORT_ASC, $array1_sort_flags = SORT_REGULAR, ...$rest): ArrayObject
    {
        $this->checkEmptyArray();
        if (!array_multisort($this->array, $array1_sort_order, $array1_sort_flags, $rest)) {
            throw new \Exception("function array_multisort() returned false");
        }
        return $this;
    }

    /**
     * @param int $lenght
     * @param $value
     * @return ArrayObject | ArrayFunctions
     */
    public function pad(int $lenght, $value): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_pad($this->array, $lenght, $value);
        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function pop(): ArrayObject
    {
        $this->checkEmptyArray();
        $this->mixed = array_pop($this->array);
        $this->array = null;

        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function product(): ArrayObject
    {
        $this->checkEmptyArray();
        $this->mixed = array_product($this->array);
        $this->array = null;

        return $this;
    }

    /**
     * @param mixed ...$values
     * @return ArrayObject | ArrayFunctions
     */
    public function push(...$values)
    {
        $this->checkEmptyArray();
        array_push($this->array, ...$values);
        return $this;
    }

    /**
     * @param int $num
     * @return ArrayObject | ArrayFunctions
     */
    public function rand(int $num = 1): ArrayObject
    {
        $this->checkEmptyArray();
        $result = array_rand($this->array, $num);

        if (is_array($result)) {
            $this->array = $result;
        } else {
            $this->mixed = $result;
            $this->array = null;
        }

        return $this;
    }

    /**
     * @param callable $callback
     * @param null $initial
     * @return ArrayObject | ArrayFunctions
     */
    public function reduce(callable $callback, $initial = null): ArrayObject
    {
        $this->checkEmptyArray();
        $this->mixed = array_reduce($this->array, $callback, $initial);
        $this->array = null;

        return $this;
    }

    /**
     * @param array ...$replacements
     * @return ArrayObject | ArrayFunctions
     */
    public function replace_recursive(array ...$replacements): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_replace_recursive($this->array, $replacements);
        return $this;
    }

    /**
     * @param array ...$replacements
     * @return ArrayObject | ArrayFunctions
     */
    public function replace(array ...$replacements): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_replace($this->array, $replacements);
        return $this;
    }

    /**
     * @param bool $preserve_keys
     * @return ArrayObject | ArrayFunctions
     */
    public function reverse(bool $preserve_keys = false): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_reverse($this->array, $preserve_keys);
        return $this;
    }

    /**
     * @param $needle
     * @param bool $strict
     * @return ArrayObject | ArrayFunctions
     */
    public function search($needle, bool $strict = false): ArrayObject
    {
        $this->checkEmptyArray();
        $result = array_search($needle, $this->array, $strict);

        if (!is_bool($result)) {
            $this->mixed = $result;
        } else {
            $this->boolean = $result;
        }

        $this->array = null;

        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function shift(): ArrayObject
    {
        $this->checkEmptyArray();
        $this->mixed = array_shift($this->array);
        $this->array = null;

        return $this;
    }

    /**
     * @param int $offset
     * @param int|null $length
     * @param bool $preserve_keys
     * @return ArrayObject | ArrayFunctions
     */
    public function slice(int $offset, ?int $length = null, bool $preserve_keys = false): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_slice($this->array, $offset, $length, $preserve_keys);
        return $this;
    }

    /**
     * @param int $offset
     * @param int|null $length
     * @param array $replacements
     * @return ArrayObject | ArrayFunctions
     */
    public function splice(int $offset, ?int $length = null, array $replacements): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_splice($this->array, $offset, $length, $replacements);
        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function sum(): ArrayObject
    {
        $this->checkEmptyArray();
        $this->mixed = array_sum($this->array);
        $this->array = null;

        return $this;
    }

    /**
     * @param callable $value_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function udiff_assoc(callable $value_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_udiff_assoc($this->array, $arrays, $value_compare_func);
        return $this;
    }

    /**
     * @param callable $value_compare_func
     * @param callable $key_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function udiff_uassoc(callable $value_compare_func, callable $key_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_udiff_uassoc($this->array, $arrays, $value_compare_func, $key_compare_func);
        return $this;
    }

    /**
     * @param callable $value_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function udiff(callable $value_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_udiff($this->array, $arrays, $value_compare_func);
        return $this;
    }

    /**
     * @param callable $value_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function uintersect_assoc(callable $value_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_uintersect_assoc($this->array, $arrays, $value_compare_func);
        return $this;
    }

    /**
     * @param callable $value_compare_func
     * @param callable $key_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function uintersect_uassoc(callable $value_compare_func, callable $key_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_uintersect_uassoc($this->array, $arrays, $value_compare_func, $key_compare_func);
        return $this;
    }

    /**
     * @param callable $value_compare_func
     * @param array ...$arrays
     * @return ArrayObject | ArrayFunctions
     */
    public function uintersect(callable $value_compare_func, array ...$arrays): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_uintersect($this->array, $arrays, $value_compare_func);
        return $this;
    }

    /**
     * @param int $flags
     * @return ArrayObject | ArrayFunctions
     */
    public function unique(int $flags = SORT_STRING): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_unique($this->array, $flags);
        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function unshift(...$values): ArrayObject
    {
        $this->checkEmptyArray();
        $this->unshift($this->array, $values);
        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function values(): ArrayObject
    {
        $this->checkEmptyArray();
        $this->array = array_values($this->array);
        return $this;
    }

    /**
     * @param callable $callback
     * @param null $userdata
     * @return ArrayObject | ArrayFunctions
     */
    public function walk_recursive(callable $callback, $userdata = null): ArrayObject
    {
        $this->checkEmptyArray();
        $this->boolean = array_walk_recursive($this->array, $callback, $userdata);
        $this->array = null;

        return $this;
    }

    /**
     * @param callable $callback
     * @param null $userdata
     * @return ArrayObject | ArrayFunctions
     */
    public function walk(callable $callback, $userdata = null): ArrayObject
    {
        $this->checkEmptyArray();
        $this->boolean = array_walk($this->array, $callback, $userdata);
        $this->array = null;

        return $this;
    }

    /**
     * @param int $flags
     * @return ArrayObject | ArrayFunctions
     */
    public function arsort(int $flags = SORT_REGULAR): ArrayObject
    {
        $this->checkEmptyArray();
        arsort($this->array, $flags);
        return $this;
    }

    /**
     * @param int $flags
     * @return ArrayObject | ArrayFunctions
     */
    public function asort(int $flags = SORT_REGULAR): ArrayObject
    {
        $this->checkEmptyArray();
        asort($this->array, $flags);
        return $this;
    }

    /**
     * @return ArrayObject | ArrayFunctions
     */
    public function count(): ArrayObject
    {
        $this->checkEmptyArray();
        $this->mixed = count($this->array);
        $this->array = null;

        return $this;
    }

    /**
     * @param $needle
     * @param bool $strict
     * @return ArrayObject | ArrayFunctions
     */
    public function in_array($needle, bool $strict = false): ArrayObject
    {
        $this->checkEmptyArray();
        $this->mixed = in_array($needle, $this->array, $strict);
        $this->array = null;

        return $this;
    }

    /**
     * @param int $flags
     * @return ArrayObject | ArrayFunctions
     */
    public function krsort(int $flags = SORT_REGULAR): ArrayObject
    {
        $this->checkEmptyArray();
        krsort($this->array, $flags);
        return $this;
    }

    /**
     * @param int $flags
     * @return ArrayObject | ArrayFunctions
     */
    public function ksort(int $flags = SORT_REGULAR): ArrayObject
    {
        $this->checkEmptyArray();
        ksort($this->array, $flags);
        return $this;
    }

    /**
     * @param int $flags
     * @return ArrayObject | ArrayFunctions
     */
    public function rsort(int $flags = SORT_REGULAR): ArrayObject
    {
        $this->checkEmptyArray();
        rsort($this->array, $flags);

        return $this;
    }

    /**
     * @param int $flags
     * @return ArrayObject | ArrayFunctions
     */
    public function sort(int $flags = SORT_REGULAR): ArrayObject
    {
        $this->checkEmptyArray();
        sort($this->array, $flags);

        return $this;
    }

    /**
     * @param callable $callback
     * @return ArrayObject | ArrayFunctions
     */
    public function uasort(callable $callback): ArrayObject
    {
        $this->checkEmptyArray();
        uasort($this->array, $callback);

        return $this;
    }

    /**
     * @param callable $callback
     * @return ArrayObject | ArrayFunctions
     */
    public function uksort(callable $callback): ArrayObject
    {
        $this->checkEmptyArray();
        uksort($this->array, $callback);

        return $this;
    }

    /**
     * @param callable $callback
     * @return ArrayObject | ArrayFunctions
     */
    public function usort(callable $callback): ArrayObject
    {
        $this->checkEmptyArray();
        usort($this->array, $callback);

        return $this;
    }
}