<html>
<head>
	<title>Kalkulator Sounding Darat v1</title>
	<style>
		body {
			font-family : arial;
			font-weight : bold;
		}
		input {
			border-radius : 5px;
			height : 45px;
			font-family : arial;
			font-weight : bold;
			text-align:center;
		}
		fieldset {
			border-radius : 5px;
			background:silver;
		}
	</style>
</head>
<body>
	<fieldset style= "background : #ffffff">
		<h2>Kalkulator Sounding Darat v1</h2>
	</fieldset>
	<fieldset>
		<h3>TABEL TANGKI PEMERIKSAAN</h3>
		<div style= "width : 100%">
			<label >Suhu tetap tangki (&#x2103;)
			</label>
			<input type="text" autocomplete = "off" required style= "width : 100%" value="46"> 
		</div>
		<div style= "width : 100%">
			<label>Tinggi meja ukur (MM)
			</label>
			<input type="text" autocomplete = "off" required style= "width : 100%" value="346"> 
		</div>
		<div style= "width : 100%">
			<label>Koefisien Muat tangki
			</label>
			<input type="text" autocomplete = "off" required style= "width : 100%" value="0.0000348"> 
		</div>
	</fieldset>
	<fieldset>
		<h3>HASIL PEMERIKSAAN FISIK</h3>
		<div style= "width : 100%">
			<label >Suhu Cairan (&#x2103;)
			</label>
			<input type="text" autocomplete = "off" required style= "width : 100%" value="55"> 
		</div>
		<div style= "width : 100%">
			<label>Tinggi Cairan (MM)
			</label>
			<input type="text" autocomplete = "off" required style= "width : 100%" value="9000"> 
		</div>
	</fieldset>
	<fieldset>
		<h3>DAFTAR ISI TANGKI UKUR</h3>
		<div style= "width : 100%">
			<label >Volume Tinggi (Lt)
			</label>
			<input type="text" autocomplete = "off" required style= "width : 100%" value="2.264.085"> 
		</div>
		<div style= "width : 100%">
			<label >Volume Tinggi (Lt)
			</label>
			<input type="text" autocomplete = "off" required style= "width : 100%" value="2.266.488"> 
		</div>
	</fieldset>
	<fieldset>
		<h3>HASIL AKHIR</h3>
		<div style= "width : 100%">
			<label >Volume Tangki
			</label>
			<input type="text" autocomplete = "off" readonly style= "width : 100%" value="2.266.237 Liter"> 
		</div>
		<div style= "width : 100%">
			<input type="text" autocomplete = "off" readonly style= "width : 100%" value="2.266.237 MT"> 
		</div>
	</fieldset>
</body>
</html>