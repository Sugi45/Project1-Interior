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
?>
<style>
   .head {
	width: 100%;
	height: 50px;
	background-color: #0228f2;
	text-align: center;
	color: white;
	font-weight: bold;
	font-size: 22px;
}
    .news{
        width: 100%;
        height: 50px;
        background-color: red;
        text-align: center;
        position: absolute;
        margin-top: 10px;
        right: 20px;
        padding: 20px 0;
}
     
     #p{

        width: 100%;
        text-align: center;
        align-items: center;
     }
     #h{
        color: white;
        font-weight: bolder;
        font-size: 22px;
        font-weight: bold;
     }
     #m{
        font-size: 20px;
        color: white;
        font-weight: bolder;
     }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="head">
                <h4 id="h">Breaking News</h4>
                </div>
            </div>

            <div class="col-md-9">
                <div class="news">
                <marquee id="m" behavior="scroll" direction="left">India vs Bangladesh: Virat Kohli slams 44th ODI century, first in over three years </marquee>
            </div>
            </div>
        </div>
    </div>
</body>
</html>