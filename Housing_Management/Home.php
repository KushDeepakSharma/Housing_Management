<!DOCTYPE html>
<html lang="en">
  <style>
  p{
  font-weight: bold;
color:white;
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
.lb p{
font-weight: bold;
color:white;
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

<h1>Admin Login</h1>
<form name="myForm" action = "signin.php" id ="demo" method = "post">
<p>Email</p>
<input type="Email" name="email" id="Email" placeholder="Email ID" autocomplete="off" required>
<p>Password</p>
<input type="password" name="password" id="psw" placeholder = "Password" name="Password" required>
<input type="submit" name="" value="Login">
<p><a style="size:24" href="workersign.php">Worker Signin</a><p>
</form>
</div>
</html>