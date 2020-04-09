<?php include("config.php"); 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = pg_query("SELECT * FROM calonsiswa WHERE id = $id");
        $siswa = pg_fetch_array($query);
    } else {
        die('Akses dilarang...');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pengeditan Data Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Pengeditan Data Siswa Baru</h3>
	</header>

    <form action="prosesedit.php?id=<?php echo $id ?>" method="POST">
		<fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>"/>
            </p>
            
            <p>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </p>

            <p>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki"<?php echo $siswa['jenis_kelamin']=='laki-laki' ? 'checked': '' ?> >Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo $siswa['jenis_kelamin']=='perempuan' ? 'checked': '' ?> >Perempuan</label>
            </p>
            <p>
                <label for="sekolah_asal">Sekolah Asal: </label>
                <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>" />
            </p>
            <p>
                <input type="submit" value="Simpan" name="update" />
            </p>
		</fieldset>
	</form>

</body>

</html>