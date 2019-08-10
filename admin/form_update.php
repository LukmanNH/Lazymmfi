    
<?php
  session_start();
  if (!(isset($_SESSION['user'])))
  {
    header("location: ../login/form-login.php");
  }
  $nama = $_SESSION['user'];

    include '../connect.php';
    $id_zakat = $_GET['id_zakat'];
    $query = "SELECT * FROM data_zakat WHERE id_zakat = $id_zakat";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
  <link rel=icon type="image/png" href="../images/favicon.png">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Pilih Donasi</h1>
    <form action="update.php" method="post">

    <p><td><label for="id_zakat">ID ZAKAT</label></td>
        <td> :</td>
        <td><input value="<?php echo $row['id_zakat']; ?>" type="text" name="id_zakat" id="telp"><br></td></p>

    <label>Jenis Donasi : </label>
    <select value="<?php echo $row['jenis_zakat']; ?>" name="jenis_zakat">
        <option value="Zakat Maal">Zakat Maal</option>
        <option value="Zakat Penghasilan">Zakat Penghasilan</option>
        <option value="Fidyah">Fidyah</option>
        <option value="Sedekah">Sedekah</option>
    </select>
        <!-- <p><td><label for="nama">Jenis Zakat</label></td>
        <td>:</td>
        <td><input type="text" name="jenis_zakat" id="nama"></td></p> -->

        <p><td><label for="telp">Nominal</label></td>
        <td> :</td>
        <td><input value="<?php echo $row['nominal']; ?>" type="text" name="nominal" id="telp"><br></td></p>

        <h1>Profil Muzaki</h1>
        <p><td><label for="nama">Nama Lengkap</label></td>
        <td>:</td>
        <td><input value="<?php echo $row['nama_lengkap']; ?>" type="text" name="nama_lengkap" id="nama"></td></p>

        <p><td><label for="telp">Alamat</label></td>
        <td> :</td>
        <td><input value="<?php echo $row['alamat']; ?>" type="text" name="alamat" id="telp"><br></td></p>

        <p><td><label for="telp">Email</label></td>
        <td> :</td>
        <td><input value="<?php echo $row['email']; ?>" type="text" name="email" id="telp"><br></td></p>

        <p><td><label for="telp">No.Hp</label></td>
        <td> :</td>
        <td><input value="<?php echo $row['no_hp']; ?>" type="text" name="no_hp" id="telp"><br></td></p>

        <label>Metode Pembayaran : </label>
        <select value="<?php echo $row['metode_pembayaran']; ?>" name="metode_pembayaran">
            <option value="BCA">BCA</option>
            <option value="BNI">BNI</option>
            <option value="BRI">BRI</option>
        </select>

        <br>
        <label>Status Verif : </label>
        <select value="<?php echo $row['status_verif']; ?>" name="status_verif">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>


        <!-- <p><td><label for="telp">Metode Pembayaran</label></td>
        <td> :</td>
        <td><input type="text" name="metode_pembayaran" id="telp"><br></td></p> -->
        <br>


        <input type="submit" name="btnSimpan" value="Simpan">

    </form>

  </body>
</html>