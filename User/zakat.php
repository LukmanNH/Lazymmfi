<?php
include'../connect.php';
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $jenis_zakat = $_POST['jenis_zakat'];
    $nominal = $_POST['nominal'];

    $quary = "INSERT INTO data_zakat (nama_lengkap, alamat,no_hp,email,metode_pembayaran,jenis_zakat,nominal) 
              VALUES ('$nama_lengkap','$alamat','$no_hp','$email','$metode_pembayaran','$jenis_zakat','$nominal')";
    $result=mysqli_query($connect,$quary);
    $num=mysqli_affected_rows($connect);


    $querry="SELECT * FROM data_zakat";
    $result=mysqli_query($connect, $querry);
    $numm=mysqli_num_rows($result);

    if($num > 0)
    {
        echo "Berhasil Tambah Data";
    }
    else {
        echo "Gagal Tambah Data";
    }  
    $data = mysqli_fetch_assoc($result);
      echo "<td> <a href='form_lanjutan1.php?id_zakat=$data[id_zakat]'>Donasi Sekarang</a>
             </td>";
    ?>