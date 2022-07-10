<!DOCTYPE html>
<html>
<head>
	<title>Simulasi Kredit Motor</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class = "wrap">
		<div class = "container">
			<h1>Simulasi Kredit Motor</h1>
            <h3>oleh Destya Vinka</h3>
			<form action="format.php" method="post">
				<table>
					<tr>
						<td>Harga Motor</td>
						<td>:</td>
						<td><input type="text" id = "rupiah1" name = "rupiah1" class = "harga_motor"></td>
					</tr>
					<tr>
						<td>Uang Muka</td>
						<td>:</td>
						<td><input type="text" id = "rupiah2" name = "rupiah2" class = "uang_muka"></td>
					</tr>
					<tr>
						<td>Lama Angsuran(tahun)</td>
						<td>:</td>
						<td>
							<select name="lama_angsuran">
								<option selected>--Pilih menu--</option>
								<option value="1">1 Tahun</option>
								<option value="2">2 Tahun</option>
								<option value="3">3 Tahun</option>
								<option value="4">4 Tahun</option>
								<option value="5">5 Tahun</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Bunga(%)</td>
						<td>:</td>
						<td>
							<select name="bunga">
								<option selected>--Pilih menu--</option>
								<option value="5">5 %</option>
								<option value="6">6 %</option>
								<option value="7">7 %</option>
								<option value="8">8 %</option>
								<option value="9">9 %</option>
								<option value="10">10 %</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" value="Submit" name="Submit">
							<input type="reset" value="Reset" name="Reset">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>