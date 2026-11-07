<?php
// Declare an associative array
$student = array(
    "name" => "Kyla",
    "age" => 20,
    "course" => "IT"
);

// Convert the array into a JSON string
$json = json_encode($student);

// Display the JSON string in the browser
echo $json;
?>