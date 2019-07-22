<!DOCTYPE html>
<html lang="en">
  <style>
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
table, th, td {
    border: 1px solid black;
    background-color:white;
    width:50%;
    text-align:center;
  }
  hr{
      visibility:hidden;
  }
</style>
<body>
<?php
 $conn = new mysqli('localhost', 'root', '', 'housing');
 $stmt="select * from asset";
    $res=$conn->query($stmt);
    if($res->num_rows > 0){
        $post='<h1>List Of Assets</h1><center><table border=><tr><th>ID</th><th>Name</th></tr>';
        while($row=$res->fetch_assoc()){
            $post.='<tr><td>'.$row['a_ID'].'</td><td>'.$row['a_name'].'</td></tr>';
        }
        $post.='</table></center>';
        echo $post;
    }
    ?>
    <hr>
    <hr>
    <center>
    <form action="main.php">
    <input type="submit" value="Back">
    </form>
    </center>
</body>
</html>