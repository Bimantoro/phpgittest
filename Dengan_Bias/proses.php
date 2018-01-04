<?php 
	$a=$_POST['alpha'];
	$b=$_POST['bias'];
	$w1=$_POST['w1'];
	$w2=$_POST['w2'];

	$x1=array($_POST['x1a'],$_POST['x1b'],$_POST['x1c'],$_POST['x1d']);
	$x2=array($_POST['x2a'],$_POST['x2b'],$_POST['x2c'],$_POST['x2d']);
	$tgt=array($_POST['ta'],$_POST['tb'],$_POST['tc'],$_POST['td']);

	$status=0;
	$yin=0;
	$epoch=0;
	$y=0;

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Hasil Training</title>
 	<link href="css/bootstrap.css" rel="stylesheet">
 </head>
 <body>
 	<div class="container-fluid" style="width:50%; margin-top:2%;">
 	<h2 align="center">HASIL TRAINING ADALINE</h2>
 	<h4 align="center"><i>Tanpa <b>Threshold</b></i></h4>
 	<hr>
 		<table class="table table-bordered" width="100%">

 			<?php 
 			while ($status!=4) {
 				$status=0;
 				?>
 			<tr>
 				<td align="center" colspan="5"><b>epoch ke : <?php echo $epoch+1; ?></b></td>
 				<td align="center" colspan="3"><b>UPDATE</b></td>
 			</tr>
 			 <tr align="center">
 				<td align="center"><b>X1</b></td>
 				<td align="center"><b>X2</b></td>
 				<td align="center"><b>T</b></td>
 				<td align="center"><b>Yin</b></td>
 				<td align="center"><b>Y</b></td>
 				<td align="center"><b>w1</b></td>
 				<td align="center"><b>w2</b></td>
 				<td align="center"><b>b</b></td>
 			</tr>
 				<?php
 				for ($i=0; $i < 4; $i++) { 
 					$yin=$b+(($x1[$i]*$w1)+($x2[$i]*$w2));

 					if($yin>0){
 						$y=1;
 					}else{
 						$y=0;
 					}

 					if($y!=$tgt[$i]){

						$b=$b+$a*($tgt[$i]-$y);
	                    $w1=$w1+$a*($tgt[$i]-$y)*$x1[$i];
	                    $w2=$w2+$a*($tgt[$i]-$y)*$x2[$i];

	                ?>
 					
 					<tr class="danger">
 						<td align="center"><?php echo $x1[$i]; ?></td>
 						<td align="center"><?php echo $x2[$i]; ?></td>
 						<td align="center"><?php echo $tgt[$i]; ?></td>
 						<td align="center"><?php echo $yin; ?></td>
 						<td align="center"><?php echo $y; ?></td>
 						<td align="center"><?php echo $w1; ?></td>
 						<td align="center"><?php echo $w2; ?></td>
 						<td align="center"><?php echo $b; ?></td>
 					</tr>

 					<?php
 					 

 					}else{
 						$status++;
 					?>

 					<tr class="success">
 						<td align="center"><?php echo $x1[$i]; ?></td>
 						<td align="center"><?php echo $x2[$i]; ?></td>
 						<td align="center"><?php echo $tgt[$i]; ?></td>
 						<td align="center"><?php echo $yin; ?></td>
 						<td align="center"><?php echo $y; ?></td>
 						<td align="center"> - </td>
 						<td align="center"> - </td>
 						<td align="center"> - </td>
 					</tr>

 					<?php
 					
 				}
 			}

 				$epoch++;
 			}
 			 ?>
 		</table>

 		<h4 align="center">Keterangan :</h4>
 		<table class="table table-bordered">
 			<tr>
 				<td colspan="2" align="center"><b>Nilai Awal</b></td>
 				<td colspan="2" align="center"><b>Nilai Akhir</b></td>
 			</tr>
 			<tr>
 				<td >Bias Awal</td>
 				<td><?php echo $_POST['bias']; ?></td>
 				<td>Bias Akhir</td>
 				<td><?php echo $b; ?></td>
 			</tr>
 			<tr>
 				<td>W1 Awal</td>
 				<td><?php echo $_POST['w1']; ?></td>
 				<td>W1 Akhir</td>
 				<td><?php echo $w1; ?></td>
 			</tr>
 			<tr>
 				<td>W2 Awal</td>
 				<td><?php echo $_POST['w2']; ?></td>
 				<td>W2 Akhir</td>
 				<td><?php echo $w2; ?></td>
 			</tr>
 			<tr>
 				<td colspan="2"> Putaran yang terjadi : </td>
 				<td colspan="2"><?php echo $epoch; ?></td>
 			</tr>
 		</table>
 		<br>
 		<hr>
 		<br>
 		<h3 align="center">Silahkan Diuji :</h3>
 		<form action="pengujian.php" method="POST">
 		<div class="row">
 			<div class="col-md-6">
 				<div class="form-group">
 					<label>Bias :</label>
 					<input type="number" required class="form-control" name="bias" value=<?php echo $b; ?> readonly>
 				</div>
 				<div class="form-group">
 					<label>W1 :</label>
 					<input type="number" required class="form-control" name="w1" value=<?php echo $w1; ?> readonly>
 				</div>
 				<div class="form-group">
 					<label>W2 :</label>
 					<input type="number" required class="form-control" name="w2" value=<?php echo $w2; ?> readonly>
 				</div>
 			</div>
 			<div class="col-md-6">
 				<div class="form-group">
 					<label>Nilai X1 :</label>
 					<input type="number" required class="form-control" name="x1">
 				</div>
 				<div class="form-group">
 					<label>Nilai X2 :</label>
 					<input type="number" required class="form-control" name="x2">
 				</div>
 			</div>
 		</div>
 		<br>
 		<button type="submit" class="btn btn-primary" style="width: 100%;">UJI</button>
 		</form>
 		<br>
 		<hr>
 		<a href="index.php"><button class="btn btn-success" style="width:100%;">KEMBALI</button></a>
 		<br>
 		<br>
 	</div>
 
 </body>
 </html>