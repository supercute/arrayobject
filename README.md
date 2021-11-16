# Package for use array functions as Object functions
Accepts any iterator, casting to array
## Usage

```php
$arr = [ 1, 2, 3, 4, 5];

$obj = \supercute\ArrayObject::take(new ArrayIterator($arr));

$newArr = $obj
    ->map(fn($item) => $item + 1)
    ->chunk(3)
    ->flush();
```
