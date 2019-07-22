<?php 
$conn = new mysqli('localhost', 'root', '', 'housing');
if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$email = $conn->real_escape_string($_POST["email"]);
$password = $conn->real_escape_string($_POST["password"]);
$stmt = "SELECT * FROM adm where email='$email'";
$res = $conn->query($stmt);
if($res->num_rows==1) {
    $row = $res->fetch_assoc();
    if($password==$row['password']) {
        echo 'Sign In successful';
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row['id'];
        header('Location: ' . 'main.php');
    }
    else {
        echo '<a href="Home.php">Enter correct credentials</a>'; 
    }    
}
else {
    echo 'Sign In failed';
}
$conn->close();
?>