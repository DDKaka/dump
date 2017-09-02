# PHP Dump

## To dump data, you just have to add the following code:

```
$dump = new Dump();
$dump->Output($data);
```



## Full example with test data:

```
$object = new stdClass();
$object->test_1 = "Test 1 Val";
$object->test_2 = "Test 2 Val";
$object->another = new stdClass();
$object->another->test_3 = "Test 3";

$data = [
    "string_1" => "this is a test",
    "string_2" => "another test",
    "my_struct" => [
        "item_2" => "world",
        "item_1" => "hello"
    ],
    "my_array" => [
        "this",
        "is",
        "an",
        "array"
    ],
    "my_boolean" => true,
    "result_set" => $query,
    "my_object" => $object
];

$dump = new Dump();
$dump->Output($data);
```
