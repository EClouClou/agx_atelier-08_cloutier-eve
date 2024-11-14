<?php
function ouvreConnexion() {
    $dbhost = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "animaux_marins_db";

$conn = new mysqli($dbhost, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $conn;
}
?>