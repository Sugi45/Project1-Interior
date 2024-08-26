 <!-- Bootstrap Styles-->
 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 






<?php 

include 'connection.php';



          $sql =  "SELECT * FROM `add` where `gid`='".$_GET['id']."' ";
          $res = mysqli_query($con,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
<div class="container">
             <div class="row">
              <div class="col-md-3">
             	<img style="float: left;" width="100%" src="img/<?=$images['image']?>">

               </div>
             </div>
             </div>
    <?php } }?>