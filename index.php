<?php

    $database = [
        "server"   => "localhost",
        "database" => "whatevo",
        "username" => "root",
        "password" => "!C0ld4u510n)"
    ];

    $db = new mysqli($database["server"], $database["username"], $database["password"], $database["database"]);

    $sql = "
        SELECT  id, username, display_name, email, is_active
        FROM    members
        WHERE   id IN (1, 6)";

    $query = $db->query($sql);

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

    include "dump.php";

    $dump = new Dump();
    $dump->Output($data);

    $db->close();

?>
