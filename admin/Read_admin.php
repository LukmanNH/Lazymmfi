<?php 
    include '../connect.php';
    $query="SELECT * FROM data_zakat";
    $result=mysqli_query($connect, $query);
    $num=mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read ADMIN</title>
</head>
<body>
<table border="1" id="customers">
       <h1>Data Muzaki</h1>
 <hr border="1">

       <tr>
         <th>No.</th>
         <th>Nama Lengkap</th>
         <th>Alamat</th>
         <th>Email</th>
         <th>No.HP</th>
         <th>Metode Pembayaran</th>
         <th>Jenis Zakat</th>
         <th>Nominal</th>
         <th>File</th>
       </tr>

       <?php
       if($num>0)
       {
         $no =1;
         while ($data =mysqli_fetch_assoc($result))
         {
           echo "<tr>";
           echo "<td>".$no."</td>";
           echo "<td>".$data['nama_lengkap']."</td>";
           echo "<td>".$data['alamat']."</td>";
           echo "<td>".$data['email']."</td>";
           echo "<td>".$data['no_hp']."</td>";
           echo "<td>".$data['metode_pembayaran']."</td>";
           echo "<td>".$data['jenis_zakat']."</td>";
           echo "<td>".$data['nominal']."</td>";
           echo "<td>".$data['file']."</td>";
           echo "<td>
                      <a href='form_update.php?id_zakat=$data[id_zakat]'>Edit</a> |
                      <a href='delete.php?id_zakat=$data[id_zakat]'onclick'return confirm(\"Apakah Anda yakin ingin menghapus data?\")>Hapus</a>
                  </td>";
           echo "</tr>";
           $no++;
         }
       }
       else
        {
      echo "<td colspan='3'>Tidak ada data</td>";
       }
        ?>

      </table>

      <button onclick="window.print()">Cetak</button>

    <script>
  </script>
</body>
</html>

