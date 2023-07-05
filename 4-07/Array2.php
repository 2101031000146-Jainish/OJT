<?php

    $array1 = array(
        "Key1" => 50,
        "Key2" => 70,
        "Key" => 30
    );
    $array2 = array(20,10,40,30);
    $array_bracets = ["value1", "value2", "value3"];
    $array3 = array(
        "first" => array("first_first" => 20),
        "second" => array("second_first" => 20,
        "second_second" => array("second_second_first" => "sub sub array")
        )
    );
    echo "<pre>";
    print_r($array1);
    print_r($array2);
    print_r($array_bracets);
    print_r($array3);

    rsort($array1);
    ksort($array2);

    print_r($array1);
    print_r($array2);

?>