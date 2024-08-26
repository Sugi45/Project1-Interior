<?php
include 'connection.php';
include 'user-login.php';
?>


<?php

$event=true;

$record_per_page = 8;
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

$query = "SELECT * FROM event order by id LIMIT $start_from, $record_per_page";
$result = mysqli_query($con, $query);

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<?php

include 'link.php';

include 'head.php';
?>
<style>
    .btn-primary {
	color: #fff;
	background-color: #32C2CD;
	border-color: #fdfdfd;
}
     .table{
       color: black;
       background-color: white;
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
a:hover{
    background-color: lightseagreen;
}

.btn-primary:hover{
    background-color: #18A0A9 !important;
}



    #t5{
        width: 40%;
    }

    #tb{
        width: 90%;
    }
    #he{
        width: 100%;
        text-align: center;
    }
    h1, .h1, h2, .h2, h3, .h3 {
	margin-top: 7px;
	margin-bottom: -5px;
	border-bottom: 1px solid black;
	padding: 10px 0;
}
</style>
<body>
<div id="page-wrapper">
            <div id="page-inner">
            <h3 id="" class=""> <div class="add"></div>
                          Events
                        </h3>
                       

                <div class="row">
                    <div class="col-md-12">
                      
						

                        

                        <div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>


  <br /><br />
  <div class="container">
   <div class="add">  <a class="btn btn-primary" href='adevent.php' id="add" ><i class="fa fa-plus" aria-hidden="true"></i>
</a></div><br />




   <div class="table-responsive">
    <table id="tb" class="table table-bordered table table-hover">
     <tr class="tr">
      
      <td>TITLE</td>
      <td>IMAGE</td>
      <td id="t5">DESCRIPTION</td>
      
      
      <td>Action</td>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
     ?>
     <tr>
        
      
      <td><?php echo $row["title"]; ?></td>
      <td><img width="200px" src="img1/<?php echo $row["image"];?>"></td>
      <td><?php echo $row["description"]; ?></td>
      
     
     

      <td><a class="btn btn-primary" href='event.php?delid=<?php echo $row['id'];?>' ><i class="fa fa-trash"></i></a>
      <a class="btn btn-primary" href='upevent.php?id=<?php echo $row["id"]?>'><i class='fa fa-edit'></i></a>
     


     </tr>

     
     <?php
     }
     ?>
    </table>
    <a class="btn btn-primary" href="index.php">Logout</a>
    <a class="btn btn-primary" href="event.php"><i class="fa fa-arrow-left" ></i></a>
    <div align="center">
    <br />














    <?php
    $page_query = "SELECT * FROM event ORDER BY id ";
    $page_result = mysqli_query($con, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
   
    if($page > 1)
    {
     echo "<a id='anc' class='btn' href='sm.php?page=1'>First</a>";
     echo "<a id='anc' class='btn' href='sm.php?page=".($page - 1)."'>Prev</a>";
    }
    for($i=$start_loop; $i<= $total_pages; $i++)
    {     
     echo "<a id='anc' class='btn' href='sm.php?page=".$i."'>".$i."</a>";
    }
    if($page <=  $total_pages)
    {
     echo "<a id='anc' class='btn' href='sm.php?page=".($page + 1)."'>Next</a>";
     echo "<a id='anc' class='btn' href='sm.php?page=".$total_pages."'>Last</a>";
    }
    
    
    ?>
    </div>
    <br /><br />
   </div>
  </div>





						
                    </div>
                </div>
				
				
                <!-- /. ROW  -->

              
				
				
				
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

                       






             </div>
                </div>
				
				
              
				
				
				
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>






<?php
if(isset($_GET['delid'])){

    mysqli_query($con,"DELETE FROM `event` WHERE id='".$_GET['delid']."' ");
    
    echo '<script>window.location.assign("event.php")</script>';
    
    
    
    }
    
?>




</body>
</html>