<?php 

include 'connection.php';

$gallery=true;

if(isset($_POST['submit'])){
    $countfiles = count($_FILES['file']['name']);
    
    
    for($i=0;$i<$countfiles;$i++){
    
    $filename = $_FILES['file']['name'][$i];
      
    move_uploaded_file($_FILES['file']['tmp_name'][$i],'img/'.$filename);
   
        $m = "INSERT INTO `add`(`image`, `date`,`gid`) VALUES ('$filename',now(),'".$_GET['id']."')";
    
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

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    #tb{

        width: 90%;
    }
    
        #file {
	width: 20%;
	
	height: 35px;
	
	background: #14adc6;
	color: black;
	position: absolute;
	
	text-align: center;
	margin-top: -55px;
}
#file1 {
	/* width: 20%; */
	height: 35px;
	background: #14adc6;
	color: black;
	position: absolute;
	text-align: center;
	margin-top: -55px;
	left: 331px;
	border-radius: 5px;
}
#he{
    width: 100%;
    text-align: center;
}
#anc {
	padding: 0px 14px;
	/* margin-top: 14px; */
	border: 1px solid skyblue;
	/* position: absolute; */
	/* float: left; */
	/* width: 100%; */
	align-content: center;
	/* margin-left: 517px; */
}
a:hover{
    background-color: lightseagreen;
}
.btn-primary {
	color: #fff;
	background-color: #32C2CD;
	border-color: #fdfdfd;
}

.tr td{
    background-color: black;
    color: white;
}
#anc {
	padding: 0px 14px;
	/* margin-top: 14px; */
	border: 1px solid skyblue;
	/* position: absolute; */
	/* float: left; */
	/* width: 100%; */
	align-content: center;
	/* margin-left: 517px; */
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
                        <h1 class="page-header" id="he">
                        <?php
$m="SELECT * FROM `gallery` WHERE `id`='".$_GET['id']."'";
$r=mysqli_query($con,$m);

while($row=mysqli_fetch_array($r)){


     echo $row["title"] ; 


}
?>
                            
                        </h1>





						<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>




  <br /><br />
  <div class="container">
   <h3 align="center"></h3> 


   <?php


$record_per_page = 2;
$page = '';
if(isset($_GET["page"]))
{
 $page = $_GET["page"];
}
else
{
 $page = 1;
}

$start_from = ($page-1)*$record_per_page;

$query = "SELECT * FROM `add` WHERE `gid`='".$_GET['id']."'";
$result = mysqli_query($con, $query);

?>















   <div class="table-responsive">


   <form method='post' action='' enctype='multipart/form-data' class="for">
    <input type="file" name="file[]" id="file" multiple class="form-control" required>

    <input type='submit' name='submit' id="file1" class="infd  btn btn-primary" value='Upload'>
</form>


    <table id="tb" class="table table-bordered table table-hover">
     <tr>
      
      
      
     
      <td>IMAGES</td>
      <td>Action</td>
      
      <td>DATE</td>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
     ?>
     <tr>

     
    
     
    <td><img width="200px" src="img/<?php echo $row["image"];?>" alt=""></td>

    <td><a class="infd btn" href='gdel2.php?id=<?php echo $row["id"];?>&delid=<?php echo $row['id'];?>'  onclick="return confirm('Do Want Delete This')">Delete</a>
    </td>

      

      <td><?php echo $row["date"];?></td>
      
     

     
     


     </tr>

     
     <?php
     }
     ?>
    </table>

    


    <div class="an">
    <a class="btn ifdn" href="index.php"><i class="fa fa-sign-out"></i>
</a>
    <a class="btn ifdn" href="gallery.php"><i class="fa fa-arrow-left" ></i>
</a>
    </div>
    <div align="center">
    <br />














    <?php
    $page_query = "SELECT * FROM `add` ORDER BY id ";
    $page_result = mysqli_query($con, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;

    if($page > 1)
    {
     echo "<a id='anc' class='btn ' href='galleryadd.php?page=1'>First</a>";
     echo "<a  id='anc' class='btn ' href='galleryadd.php?page=".($page - 1)."'>Prev</a>";
    }
    for($i=$start_loop; $i<$total_pages; $i++)
    {     
     echo "<a  id='anc' class='btn ' href='galleryadd.php?page=".$i."'>".$i."</a>";
    }
    if($page <$total_pages)
    {
     echo "<a  id='anc' class='btn ' href='galleryadd.php?page=".($page + 1)."'>Next</a>";
     echo "<a  id='anc' class='btn ' href='galleryadd.php?page=".$total_pages."'>Last</a>";
    }
    
    
    ?>
    </div>
    <br /><br />
   </div>
  </div>
 </body>




 <?php

if(isset($_GET['delid'])){

mysqli_query($con,"DELETE FROM `add` WHERE id='".$_GET['delid']."' ");

echo '<script>window.location.assign("galleryadd.php?id='.$_GET['id'].'")</script>';



}

 ?>

                    </div>
                </div>
				
				
                <!-- /. ROW  -->

              
				
				
				
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

    
</body>
</html>









































