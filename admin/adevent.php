<?php

include 'connection.php'



?>




<?php
$event=true;
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
     #de{

        height: 30px;
     }   
     .btn-primary {
	color: #fff;
	background-color: #32C2CD;
	border-color: #fdfdfd;
}
.btn-primary:hover{
    background-color: #18A0A9 !important;
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
                          Events
                            
                        </h1>
						

                        <form action="" method="POST" class="form-group" enctype="multipart/form-data">

<input type="text" placeholder="Add Title" name="title" class="form-control"><br>
<input type="file" name="file[]" id="file" class="form-control" multiple><br>
<textarea name="desc" id="" cols="30" rows="10"  class="form-control"  placeholder="Add Description"></textarea> <br>


<input type="submit" value="Add" name="submit" class="btn infd" id="file1">


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
 
    
    $a=$_POST['title'];
    $c=$_POST['desc'];


    $countfiles = count($_FILES['file']['name']);

    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
 
        
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'img1/'.$filename);
 
        $m = "INSERT INTO `event`(`title`,`image`,`description`,`date`)VALUES ('$a','$filename','$c',now())";
    
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





























