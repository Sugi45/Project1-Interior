
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .btn{
	color: #fff;
	background-color: #337ab7;
	border-color: #2e6da4;
}
.btn:hover{
  background-color: #18A0A9 !important
}
.infd{
    color: #fff;
	background-color: #32C2CD;
	border-color: #fdfdfd;
}
    
  </style>
</head>

<?php

include 'link.php';

include 'head.php';
?>

<body>
<div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          Gallery
                        </h1>
						

                        <form action="" method="post" class="form-group">

<input type="text" placeholder="Add Title" name="title" class="form-control"> <br>

<input class="btn infd" type="submit" value="Add" name="sub" >

</form>



                       






             </div>
                </div>
				
				
              
				
				
				
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>












</body>
</html>














<?php

include 'connection.php';

if(isset($_POST['sub'])){
   

   $a=$_POST['title'];
  
  
   


  
    $m = "INSERT INTO `gallery`( `title`, `date`) VALUES ('$a',now())";
    
    $r=mysqli_query($con,$m);
    if($r){
    ?>
    <script>
      alert("Added Successfully");
    </script>
    <?php
    }
    else{
      ?>
      <script>
      alert("Cannot Added the Data");
    </script>

<?php
    }
}
   ?>