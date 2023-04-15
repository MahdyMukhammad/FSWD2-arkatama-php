<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>BIODATA DIRI</title>
    <?php
	// definisi variabel
	$nama = "Mukhammad Mahdy";
	$ttl = "Pasuruan, 08 Desember 2001";
	$jenis_kelamin = "Laki - laki";
	$alamat = "Kota Pasuruan Provinsi Jawa Timur";
	$riwayat_pendidikan = "Sekarang menuntut ilmu di IT-PLN";
	$hobby = "Bermain Game, Membaca";
    ?>
</head>

<body>
    <h1>BIODATA DIRI</h1>
    <div class="container">
        <img class="profile-pic" src="assets/img/mahdy.jpeg" alt="Foto Profil">
        <table>
            <tr>
                <th>Nama</th>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <th>TTL</th>
                <td><?php echo $ttl; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo $jenis_kelamin; ?></td>
            </tr>
            <tr>
                <th>Alamat Lengkap</th>
                <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <th>Riwayat Pendidikan</th>
                <td><?php echo $riwayat_pendidikan; ?></td>
            </tr>
            <tr>
                <th>Hobby</th>
                <td><?php echo $hobby; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>