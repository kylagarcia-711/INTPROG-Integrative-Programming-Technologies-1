
<?php
// Set the response header to JSON
header('Content-Type: application/json');

// Create an array containing user profile information
$user = array(
    "id" => 1,
    "name" => "Kyla",
    "email" => "kylagarcia@gmail.com",
    "status" => "online"
);

// Convert the array into JSON and output the response
echo json_encode($user);
?>
