<!DOCTYPE html>
<html>
<head>
	<title>Biodata Diri</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=swap');

		body {
			font-family: 'Inconsolata', monospace;
			background-color: #f2f2f2;
		}

		h1 {
			text-align: center;
			margin-top: 50px;
			color: #333333;
		}

		table {
			margin: 0 auto;
			border-collapse: collapse;
			box-shadow: 0 0 10px #b3b3b3;
		}

		table th {
			background-color: #333333;
			color: #ffffff;
			padding: 10px;
			text-align: left;
		}

		table td {
			border: 1px solid #b3b3b3;
			padding: 10px;
		}

        img {
            width: 330px;
            height: 450px;
        }
	</style>
</head>
<body>
	<h1>Biodata Diri</h1>
	<table>
		<tr>
			<th>Nama Lengkap</th>
			<td><?php echo "Shiva May Vazri"; ?></td>
		</tr>
		<tr>
			<th>Tempat, Tanggal Lahir</th>
			<td><?php echo "Cirebon, 1 Mei 2002"; ?></td>
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<td><?php echo "Perempuan"; ?></td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td><?php echo "Jl. Yudhistira Desa Karangasem RT. 21 RW. 04 Blok Kapling Plumbon - Cirebon"; ?></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><?php echo "shivamay0105@gmail.com"; ?></td>
		</tr>
		<tr>
			<th>Telepon</th>
			<td><?php echo "082315221079"; ?></td>
		</tr>
		<tr>
			<th>Riwayat Pendidikan</th>
			<td><?php echo "<ul>
							<li>SMP Negeri 1 Plumbon (2014-2017)</li>
							<li>SMA Negeri 1 Plumbon (2017-2020)</li>
							<li>Universitas Pendidikan Indonesia - S1 Sistem Informasi Kelautan (2020-Sekarang)</li>
						  </ul>"; ?></td>
		</tr>
		<tr>
			<th>Hobi</th>
			<td><?php echo "Menggambar, Merajut, Menulis"; ?></td>
		</tr>
		<tr>
			<th>Foto 3x4</th>
			<td><img src="formal1.jpg" alt="Foto 3x4"></td>
		</tr>
	</table>
</body>
</html>
