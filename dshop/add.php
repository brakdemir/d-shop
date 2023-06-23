<?php
$servername = "SERVERNAME"; 
$username = "USERNAME";
$password = "PASS";
$dbname = "DBNAME";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);   
} else {
    $name = $_POST['name'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    $sql = "INSERT INTO TABLE_NAME (name, color, price) VALUES ('$name', '$color', '$price')";
    $conn->query($sql);

    $conn->close(); 
}

?>
