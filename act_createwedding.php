<?php
include('koneksiwedding.php');

$No = $_POST['No'];
$Nama = $_POST['Nama'];
$Jumlah = $_POST['Jumlah'];
$Kehadiran = $_POST['Kehadiran'];
$query = "INSERT INTO Kehadiran(No,Nama,Jumlah,Kehadiran) VALUES('0','$Nama','$Jumlah','$Kehadiran')";
$result = mysqli_query($koneksiwedding,$query);
    echo"Nama anda sudah didaftarkan";
?>
<html>
    <body>
    <a href="Kehadiran.php"><button>Lihat Undangan</button></a>
</body>
</html>
<script>
    alert('tambah data berhasil')
    window.location='readwedding.php'
</script>