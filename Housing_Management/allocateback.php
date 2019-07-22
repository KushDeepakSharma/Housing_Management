<?php
$conn = new mysqli('localhost', 'root', '', 'housing');
if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
    $id = $conn->real_escape_string(($_POST['id']));
    $assid=$conn->real_escape_string($_POST['ass']);
    $taskid = $conn->real_escape_string(($_POST['task']));
    $wid=$conn->real_escape_string($_POST['work']);
    $date = $conn->real_escape_string(($_POST['date']));
    $time=$conn->real_escape_string($_POST['time']);
    $dead = $conn->real_escape_string(($_POST['dead']));
    $stmt = "INSERT INTO allocate(allid,assid,taskid,workerid,dateall,timeall,timedead) VALUES ('$id','$assid','$taskid','$wid','$date','$time','$dead')";
    if($conn->query($stmt)) {
        header('Location: main.php');
    }
    else {
        echo 'Adding Post failed ' . $conn->error;
    }
?>