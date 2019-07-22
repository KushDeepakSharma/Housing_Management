<?php
$conn = new mysqli('localhost', 'root', '', 'housing');
if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
    $id = $conn->real_escape_string(($_POST['id']));
    $password = $conn->real_escape_string(($_POST['password']));
    $name=$conn->real_escape_string($_POST['name']);
    $stmt = "INSERT INTO worker(email,password,name) VALUES ('$id','$password','$name')";
    if($conn->query($stmt)) {
        header('Location: main.php');
    }
    else {
        echo 'Adding Post failed ' . $conn->error;
    }
?>