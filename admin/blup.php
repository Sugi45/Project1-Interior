<?php

include 'connection.php'

?>



<?php
$blog=true;
?>
<?php 






if(isset($_POST['submit'])){
 
    $id=$_GET['id'];
    


    $a= mysqli_escape_string($con,$_POST['title']);
    $c= mysqli_escape_string($con,$_POST['desc']);

    $countfiles = count($_FILES['file']['name']);

    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
 
        
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'img/'.$filename);
 
    
        $m = "UPDATE `blog` SET `title`='$a',`image`='$filename',`desc`='$c' WHERE `id`='$id'";
    
        $r=mysqli_query($con,$m);
        if($r){
        ?>
        <script>
          alert("Updated Successfully");
        </script>
        <?php
        }
        else{
          ?>
          <script>
          alert("Cannot Update the Data");
        </script>
    
    <?php
        }
    }
}
?>



<?php  




$id=$_GET['id'];

$select="SELECT * FROM `blog` WHERE `id`='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
                          Blog
                            
                        </h1>
						

                        <form action="" method="post" class="form-group" enctype="multipart/form-data">

<input type="text" placeholder="Add Title" name="title" class="form-control"  value="<?php echo $row['title'] ?>"><br>
<input type="file" name="file[]" id="file" class="form-control" multiple  value="<?php echo $row['image']?>"  ><br>
<textarea name="desc" id="" cols="30" rows="10"  class="form-control" placeholder="Add Description" value=""><?php echo $row['desc']?></textarea><br>

<input type="submit" value="Update" name="submit" class="btn infd">


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











































