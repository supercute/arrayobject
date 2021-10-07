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
    public function changeKeyCase();

    /**
     * @return mixed
     */
    public function chunk(int $length);

    /**
     * @return mixed
     */
    public function column($columnKey);

    /**
     * @return mixed
     */
    public function combine(array $array, bool $isKeys = false);

    /**
     * @return mixed
     */
    public function countValues();

    /**
     * @return mixed
     */
    public function diffAssoc(array ...$arrays);

    /**
     * @return mixed
     */
    public function diffKey(array ...$arrays);

    /**
     * @return mixed
     */
    public function diffUassoc(callable $keyCompareFunc, array ...$arrays);

    /**
     * @return mixed
     */
    public function diffUkey(callable $keyCompareFunc, array ...$arrays);

    /**
     * @return mixed
     */
    public function diff(array ...$arrays);

    /**
     * @return mixed
     */
    public function fillKeys($value);

    /**
     * @return mixed
     */
    public function fill(int $startIndex, int $count, $value);

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
    public function intersectAssoc(array ...$arrays);

    /**
     * @return mixed
     */
    public function intersectKey(array ...$arrays);

    /**
     * @return mixed
     */
    public function intersectUassoc(callable $keyCompareFunc, array ...$arrays);

    /**
     * @return mixed
     */
    public function intersectUkey(callable $keyCompareFunc, array ...$arrays);

    /**
     * @return mixed
     */
    public function intersect();

    /**
     * @return mixed
     */
    public function keyExists($key);

    /**
     * @return mixed
     */
    public function keyFirst();

    /**
     * @return mixed
     */
    public function keyLast();

    /**
     * @return mixed
     */
    public function keys($searchValue, bool $strict = false);

    /**
     * @return mixed
     */
    public function map(callable $callback, array ...$arrays);

    /**
     * @return mixed
     */
    public function mergeRecursive();

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
    public function replaceRecursive();

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
    public function slice(int $offset, ?int $length = null, bool $preserveKeys = false);

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
    public function udiffAssoc(callable $valueCompareFunc, array ...$arrays);

    /**
     * @return mixed
     */
    public function udiffUassoc(callable $valueCompareFunc, callable $keyCompareFunc, array ...$arrays);

    /**
     * @return mixed
     */
    public function udiff(callable $valueCompareFunc, array ...$arrays);

    /**
     * @return mixed
     */
    public function uintersectAssoc(callable $valueCompareFunc, array ...$arrays);

    /**
     * @return mixed
     */
    public function uintersectUassoc(callable $valueCompareFunc, callable $keyCompareFunc, array ...$arrays);

    /**
     * @return mixed
     */
    public function uintersect(callable $valueCompareFunc, array ...$arrays);

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
    public function walkRecursive(callable $callback, $userdata = null);

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
    public function inArray($needle);

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