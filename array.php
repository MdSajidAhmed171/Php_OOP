<?php

$nums = array(1,5,3,2);
//echo $nums[3];

$name = array("Sajid"=> 200, "Kazi"=>500);

echo $name["Sajid"];


$place = array(
    "dakkhinkhan"=>array(
        "Zilla"=> "Dhaka",
        "Code"=> "1230"
    ),
    "Uttarkhan"=>array(
        "Zilla"=> "Dhaka",
        "Code"=> "1200"
    )
    );

echo $place["dakkhinkhan"]["Zilla"];

?>

