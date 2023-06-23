<?php
$servername = "SERVERNAME"; 
$username = "USERNAME";
$password = "PASS";
$dbname = "DBNAME";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
} else {
    $sql = "SELECT * FROM TABLE_NAME";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $name = $row["name"];
            $color = $row["color"];
            $price = $row["price"];

            echo 'id: <span style="color: red;">' . $id . '</span>, name: ' . $name . ', color: ' . $color . ', price: ' . $price . '<br>';
        }
    } else {
        echo "";
    }
    $conn->close();
}
?>
