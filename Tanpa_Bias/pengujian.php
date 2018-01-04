<?php 
	$w1=$_POST['w1'];
	$w2=$_POST['w2'];
	$x1=$_POST['x1'];
	$x2=$_POST['x2'];

	$yin=0;
	$y=0;

	$yin=($x1*$w1)+($x2*$w2);

	if($yin>0){
 		$y=1;
 	}else{
 		$y=0;
 	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>hasil pengujian</title>
 	<link href="css/bootstrap.css" rel="stylesheet">
 </head>
 <body>
 	<div class="container-fluid" style="width:50%; margin-top:5%; margin-bottom:20%; border-radius: 45px; border: 4px solid grey;">
 		<h3 align="center" style="color: grey;">Hasil Pengujian :</h3>
 		<hr>
 		<h1 align="center" style="font-size:1900%; color: grey;"><?php echo $y; ?></h1>
 	</div>
 
 </body>
 </html>