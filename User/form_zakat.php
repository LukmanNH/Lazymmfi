<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Pilih Donasi</h1>
    <form action="zakat.php" method="post">

    <label>Jenis Zakat : </label>
    <select name="jenis_zakat">
        <option value="Zakat Maal">Zakat Maal</option>
        <option value="Zakat Penghasilan">Zakat Penghasilan</option>
        <option value="Fidyah">Fidyah</option>
    </select>
        <!-- <p><td><label for="nama">Jenis Zakat</label></td>
        <td>:</td>
        <td><input type="text" name="jenis_zakat" id="nama"></td></p> -->

        <p><td><label for="telp">Nominal</label></td>
        <td> :</td>
        <td><input type="text" name="nominal" id="telp"><br></td></p>

        <h1>Profil Muzaki</h1>
        <p><td><label for="nama">Nama Lengkap</label></td>
        <td>:</td>
        <td><input type="text" name="nama_lengkap" id="nama"></td></p>

        <p><td><label for="telp">Alamat</label></td>
        <td> :</td>
        <td><input type="text" name="alamat" id="telp"><br></td></p>

        <p><td><label for="telp">Email</label></td>
        <td> :</td>
        <td><input type="text" name="email" id="telp"><br></td></p>

        <p><td><label for="telp">No.Hp</label></td>
        <td> :</td>
        <td><input type="text" name="no_hp" id="telp"><br></td></p>

        <label>Metode Pembayaran : </label>
        <select name="metode_pembayaran">
            <option value="BCA">BCA</option>
            <option value="BNI">BNI</option>
            <option value="BRI">BRI</option>
        </select>

        <!-- <p><td><label for="telp">Metode Pembayaran</label></td>
        <td> :</td>
        <td><input type="text" name="metode_pembayaran" id="telp"><br></td></p> -->
        <br>


        <input type="submit" name="submit" value="Simpan">

    </form>

  </body>
</html>