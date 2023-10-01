<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>nama</title>
        <link rel="stylesheet" href="style6.css">
        <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
        border-radius: 10px;
        text-align: center;
        }
        </style>
    </head>
    <body>
         <table border="1" >
             <thead>
                <tr>
                 <th colspan="1">No</td>
                 <th colspan="1">Nama</td>
                 <th colspan="1">Jumlah</td>
                 <th colspan="1">Kehadiran</td>
                </tr>
            </thead>
            <?php
            include 'koneksiwedding.php';
            $No = 1;
            $ambildata ="SELECT * FROM Kehadiran ";
            $ambil = mysqli_query($koneksiwedding,$ambildata);
            while($cetak = mysqli_fetch_array($ambil)){
            ?>
            <tbody>
                <tr>
                 <td><?php echo $No++;?> </td>
                 <td><?php echo $cetak['Nama'];?></td>
                 <td><?php echo $cetak['Jumlah'];?></td>
                 <td><?php echo $cetak['Kehadiran'];?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    <br>
    <a href="read.php"><button>Tambah Data</button></a>
    </body>
</html>