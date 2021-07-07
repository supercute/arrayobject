<?php

namespace supercute\Contacts;

/**
 * Interface Arrayble
 * @codingStandardsIgnoreStart PSR1.Methods.CamelCapsMethodName.NotCamelCaps
 * @package supercute\ArrayObject\Contracts
 */
interface Arrayble
{
    /**
     * @return mixed
     */
    public function change_key_case();

    /**
     * @return mixed
     */
    public function chunk(int $length);

    /**
     * @return mixed
     */
    public function column($column_key);

    /**
     * @return mixed
     */
    public function combine(array $array, bool $isKeys = false);

    /**
     * @return mixed
     */
    public function count_values();

    /**
     * @return mixed
     */
    public function diff_assoc(array ...$arrays);

    /**
     * @return mixed
     */
    public function diff_key(array ...$arrays);

    /**
     * @return mixed
     */
    public function diff_uassoc(callable $key_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function diff_ukey(callable $key_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function diff(array ...$arrays);

    /**
     * @return mixed
     */
    public function fill_keys($value);

    /**
     * @return mixed
     */
    public function fill(int $start_index, int $count, $value);

    /**
     * @return mixed
     */
    public function filter();

    /**
     * @return mixed
     */
    public function flip();

    /**
     * @return mixed
     */
    public function intersect_assoc(array ...$arrays);

    /**
     * @return mixed
     */
    public function intersect_key(array ...$arrays);

    /**
     * @return mixed
     */
    public function intersect_uassoc(callable $key_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function intersect_ukey(callable $key_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function intersect();

    /**
     * @return mixed
     */
    public function key_exists($key);

    /**
     * @return mixed
     */
    public function key_first();

    /**
     * @return mixed
     */
    public function key_last();

    /**
     * @return mixed
     */
    public function keys($search_value, bool $strict = false);

    /**
     * @return mixed
     */
    public function map(callable $callback, array ...$arrays);

    /**
     * @return mixed
     */
    public function merge_recursive();

    /**
     * @return mixed
     */
    public function merge();

    /**
     * @return mixed
     */
    public function multisort();

    /**
     * @return mixed
     */
    public function pad(int $lenght, $value);

    /**
     * @return mixed
     */
    public function pop();

    /**
     * @return mixed
     */
    public function product();

    /**
     * @return mixed
     */
    public function push();

    /**
     * @return mixed
     */
    public function rand();

    /**
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null);

    /**
     * @return mixed
     */
    public function replace_recursive();

    /**
     * @return mixed
     */
    public function replace();

    /**
     * @return mixed
     */
    public function reverse();

    /**
     * @return mixed
     */
    public function search($needle, bool $strict = false);

    /**
     * @return mixed
     */
    public function shift();

    /**
     * @return mixed
     */
    public function slice(int $offset, ?int $length = null, bool $preserve_keys = false);

    /**
     * @return mixed
     */
    public function splice(int $offset, ?int $length = null, array $replacements);

    /**
     * @return mixed
     */
    public function sum();

    /**
     * @return mixed
     */
    public function udiff_assoc(callable $value_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function udiff_uassoc(callable $value_compare_func, callable $key_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function udiff(callable $value_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function uintersect_assoc(callable $value_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function uintersect_uassoc(callable $value_compare_func, callable $key_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function uintersect(callable $value_compare_func, array ...$arrays);

    /**
     * @return mixed
     */
    public function unique();

    /**
     * @return mixed
     */
    public function unshift();

    /**
     * @return mixed
     */
    public function values();

    /**
     * @return mixed
     */
    public function walk_recursive(callable $callback, $userdata = null);

    /**
     * @return mixed
     */
    public function walk(callable $callback, $userdata = null);

    /**
     * @return mixed
     */
    public function arsort();

    /**
     * @return mixed
     */
    public function asort();


    /**
     * @return mixed
     */
    public function count();

    /**
     * @return mixed
     */
    public function in_array($needle);

    /**
     * @return mixed
     */
    public function krsort();

    /**
     * @return mixed
     */
    public function ksort();

    /**
     * @return mixed
     */
    public function rsort();

    /**
     * @return mixed
     */
    public function sort();

    /**
     * @return mixed
     */
    public function uasort(callable $callback);

    /**
     * @return mixed
     */
    public function uksort(callable $callback);

    /**
     * @return mixed
     */
    public function usort(callable $callback);
}