<?php
include '../connect.php';
    $id_zakat = $_GET ['id_zakat'];
    $query= "DELETE FROM data_zakat WHERE id_zakat=$id_zakat";
    $result=mysqli_query($connect, $query);
    $num =mysqli_affected_rows($connect);
if ($num>0)
{
  echo "Berhasil Hapus data <br> ";
}
else
{
  echo "Gagal hapus data <br>";
}
echo "<a href='read_admin.php'>Lihat data<a>";
 ?>