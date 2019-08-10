<?php 
    include '../connect.php';
    $query="SELECT * FROM data_zakat";
    $result=mysqli_query($connect, $query);
    $num=mysqli_num_rows($result);

?>
<!DOCTYPE html>

<html>
  
  <head>
      <meta charset="utf-8">
      <title>Formulir Pembayaran Zakat</title>

<style>


* {
  margin:auto;
  padding: auto;
  font-family: sans-serif;
}

input[type=text],select {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
}

      #box1{
				width:500px;
				height:380px;
				border:solid 2px black;
        border-radius: 5px;
			}

      #box2{
				width:500px;
				height:380px;
				border:solid 2px black;
        border-radius: 5px;
			}

      #box3{
				width:400px;
				height:350px;
				border:solid 2px black;
        border-radius: 5px;
			}

      h1 {
        text-align:center;
        color:green;
      }

      .margin {
        margin:10px;
      }

      .grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      padding: 10px;
      }

      .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

    .posisi{
      text-align:center;
    }

</style>

  </head>
  
  <body>
    
    <br>
    <h1>Formulir Pembayaran Zakat</h1>
    <br>

  <div class="grid-container">    
    <div id="box1">
      <div class="margin">
      <h1>Pilih Donasi</h1>
        <form action="zakat.php" method="post">

<br>

          <label for="nama" >Kode Zakat</label><br>
          <input readonly value="<?php echo rand(100,1000000);?>" type="text" name="id_zakat" id="nama"><br>

    <label>Jenis Donasi </label><br>
      <select name="jenis_zakat">
          <option value="Zakat Maal">Zakat Maal</option>
          <option value="Zakat Penghasilan">Zakat Penghasilan</option>
          <option value="Fidyah">Fidyah</option>
          <option value="Sedekah">Sedekah</option>
      </select>
        
        <br>

        <label for="telp">Nominal </label><br>
        <input type="text" name="nominal" id="telp"><br>
      </div>
  </div>

<br>

  <div id="box2">
    <div class="margin">
        <h1>Profil Muzaki</h1>

<br>

          <label for="nama">Nama Lengkap</label><br>  
          <input type="text" name="nama_lengkap" id="nama"><br>
            
          <label for="telp">Alamat</label><br>
          <input type="text" name="alamat" id="telp"><br>
            
          <label for="telp">Email</label><br>
          <input type="text" name="email" id="telp"><br>
            
          <label for="telp">No.Hp</label><br>
          <input type="text" name="no_hp" id="telp"><br>
      </div>
    </div>
  </div>
<br>

    <div id="box3">
      <div class="margin">
          <label>Metode Pembayaran : </label>
            <br>
        <!-- <select name="metode_pembayaran">
            <option value="BCA">BCA</option>
            <option value="BNI">BNI</option>
            <option value="BRI">BTN</option>
        </select> -->
            <input type="radio" name="metode_pembayaran" value="BCA"> <img style="width:190px; height:75px;" src="../images/bca.png" alt="BCA"> <br>
            <input type="radio" name="metode_pembayaran" value="BNI"> <img style="width:190px; height:75px;" src="../images/bni.png" alt="BNI"> <br>
            <input type="radio" name="metode_pembayaran" value="BRI"> <img style="width:190px; height:75px;" src="../images/bri.png" alt="BNI"><br>
      
            <br>
          <div class="posisi">
            <input type="submit" name="submit" value="Donasi Sekarang" class="button"> 
          </div>
      </div>
    </div>

<br>
           
    
    </form>

  </body>
</html>