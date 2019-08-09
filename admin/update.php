<?php
    if (!(isset($_POST['btnSimpan'])))
    {
        header("location: form_update.php");
    }
    include '../connect.php';
    $id_zakat = $_POST['id_zakat'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $jenis_zakat = $_POST['jenis_zakat'];
    $nominal = $_POST['nominal'];
    $status_verif = $_POST['status_verif'];
    $query = "UPDATE data_zakat SET nama_lengkap = '$nama_lengkap', no_hp='$no_hp', email='$email',
              metode_pembayaran='$metode_pembayaran', jenis_zakat='$jenis_zakat', nominal='$nominal', alamat='$alamat', status_verif='$status_verif'
              WHERE id_zakat = $id_zakat";
    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);


    if ($num > 0)
    {
        echo "Berhasil Update data <br>";
    }
    else
    {
        echo "Gagal Update data <br>";
    }
        echo " <a href='read_admin.php'> Lihat Data </a>";
    ?>