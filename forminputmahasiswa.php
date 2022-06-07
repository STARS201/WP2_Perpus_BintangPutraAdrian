<html>
<head>
	<title>Form Registrasi</title>
	</head>
	<form action="formoutputmahasiswa.php" method="post">
<b>Form Registrasi</b>
<pre>
Isi Data Dibawah ini :

Nama		: <input type="text" name="nama" size="25" maxlength="50">

Alamat		: <textarea name="alamat" cols="50" rows="5"></textarea>

Tempat Lahir	: <input type="text" name="tempatlahir" size="25" maxlength="50">

Tanggal Lahir	: <input type="text" name="tanggallahir" size="25" maxlength="50">

Jenis Kelamin	:<input type="radio" name="jeniskelamin" value="Laki-Laki"> Laki - Laki <input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan

Pendidikan	: <select name="pendidikan">
	<option value="S1">S1
	<option value="S2">S2
	<option value="S3">S3
	</select>
</pre>
<p>
<input type="submit" value="Submit"> <input type="reset" value="Cancel">
</form>
</body>
</html>