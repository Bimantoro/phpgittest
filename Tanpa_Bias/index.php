<!DOCTYPE html>
<html>
<head>
	<title>Input Data Training</title>
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body style="background:#F4F8FA;">
<div class="container" style="width:50%; margin-top:2%; margin-bottom:2%; background:#fff;">
	<h2 align="center"><b>ADALINE</b></h2>
	<h4 align="center"><i>Tanpa <b>Bias</b> Tanpa <b>Threshold</b></i></h4>
	<hr>
	<form action="proses.php" method="POST">
	<h4 align="center">Auto Input :</h4>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"><button class="btn btn-success" style="width: 100%" type="button" id="or_btn" onclick="or_input();">OR</button></div>
			<div class="col-md-4"><button class="btn btn-danger" style="width: 100%" type="button" id="and_btn" onclick="and_input();">AND</button></div>
			<div class="col-md-4"><button class="btn btn-success" style="width: 100%" type="button" id="not_and_btn" onclick="not_and_input();">NOT AND</button></div>
			
		</div>

		<br>
		<hr>

		<div class="row">
			<div class="col-md-4" align="center"><b>X1</b></div>
			<div class="col-md-4" align="center"><b>X2</b></div>
			<div class="col-md-4" align="center"><b>T</b></div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="x1a" name="x1a" required> </div>
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="x2a" name="x2a" required> </div>
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="ta" name="ta" required> </div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="x1b" name="x1b" required> </div>
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="x2b" name="x2b" required> </div>
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="tb" name="tb" required> </div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="x1c" name="x1c" required> </div>
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="x2c" name="x2c" required> </div>
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="tc" name="tc" required> </div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="x1d" name="x1d" required> </div>
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="x2d" name="x2d" required> </div>
			<div class="col-md-4" align="center"> <input type="number" class="form-control" id="td" name="td" required> </div>
		</div>

		<br>
		<p id="keterangan" align="center" style="color: red"></p>
		<hr>
		<div class="row">
			
			<div class="col-md-6">
				<div class="form-group">
					<label>W1 :</label>
					<input type="double" class="form-control" name="w1" required value="0">
				</div>
				<div class="form-group">
					<label>W2 :</label>
					<input type="double" class="form-control" name="w2" required value="0">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Alpha :</label>
					<input type="double" class="form-control" name="alpha" required>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success" style="width:100%; width: 100%;">Training Data</button>
				</div>
			</div>

		</div>
		<br>
		<a href="../"><b>Kembali ke Halaman Utama</b></a>
		<hr>
		<br>

		<br>
	</form>	
	</div>
</div>

</body>
<script type="text/javascript">
	function or_input(){
		x1a.value=0;	x2a.value=0; ta.value=0;
		x1b.value=0;	x2b.value=1; tb.value=1;
		x1c.value=1;	x2c.value=0; tc.value=1;
		x1d.value=1;	x2d.value=1; td.value=1;
	}

	function and_input(){
		x1a.value=0;	x2a.value=0; ta.value=0;
		x1b.value=0;	x2b.value=1; tb.value=0;
		x1c.value=1;	x2c.value=0; tc.value=0;
		x1d.value=1;	x2d.value=1; td.value=1;
		alert('Untuk notasi AND tanpa menggunakan BIAS akan menghasilkan keadaan looping yang tak berujung ! Tidak disarankan untuk training notasi AND tanpa menggunakan BIAS');
		
	}

	function not_and_input(){
		x1a.value=0;	x2a.value=0; ta.value=0;
		x1b.value=0;	x2b.value=1; tb.value=0;
		x1c.value=1;	x2c.value=0; tc.value=1;
		x1d.value=1;	x2d.value=1; td.value=0;
	}

</script>
</html>