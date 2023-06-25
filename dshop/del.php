<?php
$servername = "SERVERNAME"; 
$username = "USERNAME";
$password = "PASS";
$dbname = "DBNAME";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
} else {
    $id = $_POST['id'];

    $sql_delete = "DELETE FROM TABLE_NAME WHERE id = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("s", $id);
    $stmt->execute();

    $conn->close();
}

?>
