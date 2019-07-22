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
.lb p{
font-weight: bold;
}
.lb input{
width: 100%;
margin-bottom: 20px;
}
.lb input[type="text"], input[type="password"], input[type="Email"]
{
background: transparent;
height: 40px;
color: #fff;
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
</style>
<div class="lb">

<h1>Add Worker</h1>
<form action = "workerback.php" id ="demo" method = "post">
<p>ID</p>
<input type="email" name="id" id="id" placeholder="ID" autocomplete="off" required>
<p>Password</p>
<input type="password" name="password" id="psw" placeholder = "Password" required>
<p>Name</p>
<input type="Text" name="name" id="name" placeholder = "Name" required>
<input type="submit" name="" value="Add">
</form>
</div>
</html>