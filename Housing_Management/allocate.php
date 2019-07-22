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
background: #333;
color: #fff;
top: 50%;
left: 50%;
position: absolute;
transform: translate(-50%,-50%);
box-sizing: border-box;
padding: 70px 30px;
}
.avatar{
width: 100px;
height: 100px;
border-radius: 50%;
position: absolute;
top: -50px;
left: calc(50% - 50px);
}
h1{
margin: 0;
padding: 0 0 20px;
text-align: center;
font-size: 22px;
}
.lb p{
margin: 0;
padding: 0;
font-weight: bold;
}
.lb input{
width: 100%;
margin-bottom: 20px;
}
.lb input[type="text"], input[type="Time"],input[type="Date"]
{
border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 40px;
color: #fff;
font-size: 16px;
}
.lb input[type="submit"]
{
border: none;
outline: none;
height: 40px;
background: black;
color: #fff;
}
</style>
<div class="lb">

<h1>Allocate Task</h1>
<form action = "allocateback.php" id ="demo" method = "post">
<p>ID</p>
<input type="Text" name="id" id="id" placeholder="ID" autocomplete="off" required>
<p>Asset ID</p>
<input type="Text" name="ass"  placeholder = "Asset ID" required>
<p>Task ID</p>
<input type="Text" name="task"  placeholder = "Task ID" required>
<p>Worker ID</p>
<input type="Text" name="work"  placeholder = "Worker ID" required>
<p>Date</p>
<input type="Date" name="date"  placeholder = "Date" required>
<p>Time</p>
<input type="Time" name="time"  placeholder = "Time" required>
<p>Deadline</p>
<input type="Time" name="dead"  placeholder = "Deadline" required>
<input type="submit" name="" value="Allocate">
</form>
</div>
</html>