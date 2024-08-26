<?php

include 'connection.php';
$con = mysqli_connect("localhost", "root", "", "ggs");

if(isset($_POST['sub'])){
    
$u=$_POST['user'];
$p=$_POST['pass'];

$sql1="SELECT password FROM admin WHERE username='$u' ";
$sql2=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($sql2)){



    if($p==$row['password']){

     $_SESSION['login']=$u;
        echo '<script>window.location.assign("dashboard.php")</script>';
    }
    else{
        echo"<p id='h1'>PLease Enter Correct Password.</p>" ;
    }
}
else{

    echo "<p id='h1'>Invalid Username.</p>";
}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
  #b1{
    background-repeat: no-repeat;
  }
  #h{
    width: 100%;
    text-align: center;

  }
  form{

    margin-top: 30px;
  }
  #h1{
    padding: 481px 657px;
position: relative;
  }
</style>

<body >
    

<div class="container">
    <div class="myform">

    <h1 id="h">Login</h1>
    <form action="" method="POST">

   
   USERNAME: <input  type="text" name="user" autocomplete="off" required><br>
   PASSWORD: <input type="text" name="pass" autocomplete="off" required><br>
   
   <input type="submit" value="SUBMIT" name="sub">
    </form>
   
    </div>
    </div>
</body>
</html>





















