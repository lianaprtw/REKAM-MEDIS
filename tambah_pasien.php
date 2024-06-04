<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];

    $sql = "INSERT INTO patients (nama, `tanggal lahir`, `jenis kelamin`, alamat, telepon) VALUES ('$nama', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$telepon')";

    if ($conn->query($sql) === TRUE) {
        echo "Pasien baru berhasil ditambahkan";
    } else {
        echo "Pasien baru gagal di tambahkan";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Tambah Pasien Baru</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nama: <input type="text" name="nama"><br>
  Tanggal Lahir: <input type="date" name="tanggal_lahir"><br>
  Jenis Kelamin: <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                 <input type="radio" name="jenis_kelamin" value="P"> Perempuan<br>
  Alamat: <textarea name="alamat"></textarea><br>
  Telepon: <input type="text" name="telepon"><br>
  <input type="submit">
</form>

</body>
</html>