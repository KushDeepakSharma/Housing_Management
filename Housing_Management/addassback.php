<?php
$conn = new mysqli('localhost', 'root', '', 'housing');
if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
    $id = $conn->real_escape_string(($_POST['id']));
    $name=$conn->real_escape_string($_POST['name']);
    $stmt = "INSERT INTO asset(a_ID,a_name) VALUES ('$id','$name')";
    if($conn->query($stmt)) {
        header('Location: main.php');
    }
    else {
        echo 'Adding Post failed ' . $conn->error;
    }
?>