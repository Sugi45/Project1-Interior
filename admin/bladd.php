<?php

include 'connection.php'



?>




<?php
$blog=true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .btn-primary {
	color: #fff;
	background-color: #32C2CD;
	border-color: #fdfdfd;
}
    #tr{
        padding: 1px;
    }
     #de{

        height: 30px;
     }   
     .infd{
    color: #fff;
	background-color: #32C2CD;
	border-color: #fdfdfd;
}
    
</style>

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
                         Add Blog
                            
                        </h1>
						

                        <form action="" method="POST" class="form-group" enctype="multipart/form-data">

<input type="text" placeholder="Add Title" name="title" class="form-control"><br>
<input type="file" name="file[]" id="file" class="form-control" multiple><br>

<textarea class="form-control" name="desc" id="tr" cols="30" rows="10" placeholder="Add Description"></textarea>
 <br>

<input type="submit" value="Add" name="submit" class="btn infd" id="fi">


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
/*
include 'connection.php';




if(isset($_POST['sub'])){
   // Count total files
   $countfiles = count($_FILES['img']['name']);
 
   // Looping all files
   for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['img']['name'][$i];
   
        // Upload file
        move_uploaded_file($_FILES['img']['tmp_name'][$i],'img/'.$filename);
    
   }
} */
?>







<?php 






if(isset($_POST['submit'])){
 
    
    $a= mysqli_escape_string($con,$_POST['title']);
    $c= mysqli_escape_string($con,$_POST['desc']);


    $countfiles = count($_FILES['file']['name']);

    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
 
        
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'img/'.$filename);
 
        $m = "INSERT INTO `blog`(`title`,`image`,`desc`)VALUES ('$a','$filename','$c')";
    
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
}
?>





























