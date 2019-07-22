<html>
<style>
table, th, td {
    border: 1px solid black;
    background-color:white;
    width:50%;
    text-align:center;
  }
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: grey;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: blue;
}
  body{
margin: 0;
padding: 0;
background: url("images.jpg");
background-size: cover;
}
.lb{
width: 320px;
height: 420px;
background: #333;
color: #fff;
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%,-50%);}
.avatar{
width: 100px;
height: 100px;
border-radius: 50%;
position: absolute;
top: -50px;
}
h1{
margin: 0;
padding: 0 0 20px;
text-align: center;
}
.lb input{
width: 100%;
margin-bottom: 20px;
}
.lb input[type="submit"]
{
height: 40px;
background: black;
color: #fff;
}
.lb a{
text-decoration: none;
font-size: 12px;
line-height: 20px;
color: darkgrey;
}
hr{
    visibility:hidden;
}
</style>
<body>
<ul>
<li style="float:right"><a class="active" href="signoutw.php">Sign Out</a></li>
</ul>
<?php 
$conn = new mysqli('localhost', 'root', '', 'housing');
if($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
$email = $conn->real_escape_string($_POST["email"]);
$password = $conn->real_escape_string($_POST["password"]);
$stmt = "SELECT * FROM worker where email='$email'";
$res = $conn->query($stmt);
if($res->num_rows==1) {
    $row = $res->fetch_assoc();
    if($password==$row['password']) {
        session_start();
        $_SESSION['email'] = $email;
    $stmt="select * from allocate where workerid='$email'";
    $res=$conn->query($stmt);
    if($res->num_rows > 0){
        $post='<h1>List Of Tasks</h1><center><table border=><tr><th>Allocation ID</th><th>Asset ID</th><th>Task ID</th><th>Date Of Allocation</th><th>Time Of Allocation</th><th>Deadline</th></tr>';
        while($row=$res->fetch_assoc()){
            $post.='<tr><td>'.$row['allid'].'</td><td>'.$row['assid'].'</td><td>'.$row['taskid'].'</td><td>'.$row['Dateall'].'</td><td>'.$row['timeall'].'</td><td>'.$row['timedead'].'</td></tr>';
        }
        $post.='</table></center>';
        echo $post;
    $stmt1="select a_name from asset";
    $res1=$conn->query($stmt1);
    if($res1->num_rows > 0){
        $p='<ol><h2>List of Assets</h2>';
        while($row1=$res1->fetch_assoc()){
        $p.='<li>'.$row1['a_name'].'</li>';
    }
    $p.='</ol>';
    echo $p;
    }
    $stmt2="select t_name from task";
    $res2=$conn->query($stmt2);
    if($res2->num_rows > 0){
        $p1='<ol><h2>List of Tasks</h2>';
        while($row2=$res2->fetch_assoc()){
        $p1.='<li>'.$row2['t_name'].'</li>';
    }
    $p1.='</ol>';
    echo $p1;
    }
    }
    }
    else {
        echo '<a href="workersign.php">Enter correct credentials</a>'; 
    }    
}
else {
    echo 'Sign In failed';
}
$conn->close();
?>
</body>
</html>