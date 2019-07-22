<!DOCTYPE html>
<html lang="en">
  <style>
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
<li style="float:right"><a class="active" href="signout.php">Sign Out</a></li>
</ul>
<div class="lb">
<h1>Admin Tasks</h1>
<form action = "addasset.php" id ="demo" method = "post">
<input type="submit" value="Add an Asset">
</form>
<form action = "addtask.php" id ="demo" method = "post">
<input type="submit" value="Add a task">
</form>
<form action = "worker.php" id ="demo" method = "post">
<input type="submit" value="Add a worker">
</form>
<form action = "viewasset.php" id ="demo" method = "get">
<input type="submit" value="View Assets">
</form>
<form action = "allocate.php" id ="demo" method = "post">
<input type="submit" value="Allocate Task">
</form>
</div>
<hr>
</body>
</html>