<?php
include'../connect.php';
    $file = $_POST['file'];
    $quary = "INSERT INTO data_zakat (file) 
              VALUES ('$file')";
    $result=mysqli_query($connect,$quary);
    $num=mysqli_affected_rows($connect);


   

    if($num > 0)
    {
        echo "Berhasil Tambah Data";
    }
    else {
        echo "Gagal Tambah Data";
    } 
    ?>