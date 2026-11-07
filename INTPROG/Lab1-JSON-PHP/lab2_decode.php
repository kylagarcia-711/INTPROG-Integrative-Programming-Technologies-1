
<?php
// Declare a JSON string
$json = '{"name":"Kyla","age":20,"email":"kylag9199@gmail.com"}';

// Convert JSON string into a PHP object
$object = json_decode($json);

// Convert JSON string into a PHP associative array
$array = json_decode($json, true);

// Display individual values using PHP object
echo "<h3>PHP Object:</h3>";
echo "Name: " . $object->name . "<br>";
echo "Age: " . $object->age . "<br>";
echo "Email: " . $object->email . "<br>";

// Display individual values using PHP associative array
echo "<h3>PHP Associative Array:</h3>";
echo "Name: " . $array["name"] . "<br>";
echo "Age: " . $array["age"] . "<br>";
echo "Email: " . $array["email"] . "<br>";
?>
