<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2 Sebelum MID</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		table, tr, td {
			border: 1px solid black
		}
	</style>
</head>
<body>
	<div align="center">
		<table width="80%">
			<tr>
				<td colspan="3" align="center">Data Mahasiswa</td>
			</tr>

			<tr>
				<td>Nama</td>
				<td><?php echo (isset($_POST["nama"]) == false ? "Ridwan Hanif" : $_POST["nama"]); ?></td>
				<td rowspan="5" align="center"><a href="profil.png"><img src="profil.png" alt="Foto profil"></a></td>
			</tr>

			<tr>
				<td>NIM</td>
				<td><?php echo (isset($_POST["nama"]) == false ? "19.12.9999" : "99.99.9999"); ?></td>
			</tr>

			<tr>
				<td>Kelas</td>
				<td><?php echo (isset($_POST["kelas"]) == false ? "19-S1SI-01" : $_POST["kelas"]); ?></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><?php echo (isset($_POST["email"]) == false ? "Ridwanhanif@students.amikom.ac.id" : $_POST["email"]); ?></td>
			</tr>

			<tr>
				<td>Deskripsi</td>
				<td><p>Saya adalah mahasiswa AMIKOM. Saya di Amikom memilih prodi Sistem Informasi, KArena saya ingin menjadi <strike>Web developer</strike> maka saya akan bersungguh sungguh belajar di amikom</p></td>
			</tr>

			<tr>
				<td colspan="3" bgcolor="cyan" height="30px"></td>	
			</tr>

			<tr>
				<td>Nama</td>
				<td><?php echo (isset($_POST["nama"]) == false ? "Ridwan Hanif" : $_POST["nama"]); ?></td>
				<td rowspan="5" align="center"><img src="dontexist.jpg" alt="Foto profil"></td>
			</tr>

			<tr>
				<td>NIM</td>
				<td><?php echo (isset($_POST["nama"]) == false ? "19.12.9999" : "99.99.9999"); ?></td>
			</tr>

			<tr>
				<td>Kelas</td>
				<td><?php echo (isset($_POST["kelas"]) == false ? "19-S1SI-01" : $_POST["kelas"]); ?></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><?php echo (isset($_POST["email"]) == false ? "Ridwanhanif@students.amikom.ac.id" : $_POST["email"]); ?></td>
			</tr>

			<tr>
				<td>Deskripsi</td>
				<td><p>Saya adalah mahasiswa AMIKOM. Saya di Amikom memilih prodi Sistem Informasi, KArena saya ingin menjadi <strike>Web developer</strike> maka saya akan bersungguh sungguh belajar di amikom</p></td>
			</tr>
		</table>
		<a href="form.html">Kembali</a>
	</div>
</body>
</html>