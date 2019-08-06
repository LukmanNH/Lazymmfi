<?php
    // if (!(isset($_POST['btnSimpan'])))
    // {
    //     header("location: form_verif.php?id_zakat=$data[id_zakat]");
    // }
    include '../connect.php';
    $id_zakat = $_GET['id_zakat'];
    // $nama_lengkap = $_POST['nama_lengkap'];
    // $alamat = $_POST['alamat'];
    // $no_hp = $_POST['no_hp'];
    // $email = $_POST['email'];
    // $metode_pembayaran = $_POST['metode_pembayaran'];
    // $jenis_zakat = $_POST['jenis_zakat'];
    // $nominal = $_POST['nominal'];
    // $query = "UPDATE data_zakat SET nama_lengkap = '$nama_lengkap', no_hp='$no_hp', email='$email',
    //           metode_pembayaran='$metode_pembayaran', jenis_zakat='$jenis_zakat', nominal='$nominal', alamat='$alamat'
    //           WHERE id_zakat = $id_zakat";
    // $result = mysqli_query($connect,$query);
    // $num = mysqli_affected_rows($connect);

    
    $querry="SELECT * FROM data_zakat WHERE id_zakat = $id_zakat";
    $result=mysqli_query($connect, $querry);
    $numm=mysqli_num_rows($result);
    // if ($num > 0)
    // {
    //     echo "Berhasil Update data <br>";
    // }
    // else
    // {
    //     echo "Gagal Update data <br>";
    // }
    $data = mysqli_fetch_assoc($result);
    echo "<td> <a href='form_verif.php?id_zakat=$data[id_zakat]'>Konfirmasi Sekarang</a>
           </td>";
    ?>