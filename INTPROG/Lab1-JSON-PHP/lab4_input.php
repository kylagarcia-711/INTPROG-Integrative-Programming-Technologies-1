<?php
// Read incoming JSON data
$json = file_get_contents('php://input');

// Use sample JSON if nothing was sent (for browser testing)
if (empty($json)) {
    $json = '{"name":"fenji","age":20,"email":"kyla@example.com"}';
}

// Decode JSON data into a PHP object
$data = json_decode($json);

// Display the received values
echo "<h3>Received JSON Data:</h3>";

echo "Name: " . $data->name . "<br>";
echo "Age: " . $data->age . "<br>";
echo "Email: " . $data->email . "<br>";
?>