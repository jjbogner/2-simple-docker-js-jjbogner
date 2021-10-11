<?php

$foo = "To be";
$bar = "or not to be";

echo $foo . ' ' . $bar . "\n";

echo $num * $num * $num;

$arr = [
    "first" => "Tom",
    "second" => "Bipin",
    "best" => "DS"
];

$arr2 = [1,2,3,4,5,8]

if (true) {
    echo "\nTRUE\n"
}

while (true) {
    //This way it doesn't actually do anything
    break;
}

echo "<ul>";
foreach($arr as $key=>$val){
    echo "<li>".$key ." is ".$val."</li>";
}
echo "</ul>";

echo json_endcode(
    $arr,
    JSON_PRETTY_PRINT|JSON_THROW_ON_ERROR
);