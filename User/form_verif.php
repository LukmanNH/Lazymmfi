<?php
    include '../connect.php';
    $id_zakat = $_GET['id_zakat'];
    $query = "SELECT * FROM data_zakat";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lazymmfi | Verifikasi</title>
  </head>
  <link rel=icon type="image/png" href="../images/favicon.png">
  <style>

* {
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: sans-serif;
}

.container {
    width: 600px;
    margin: 10px 30%;
}

#button {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
.clearfix {
    clear: both;
}

.form-part {
    margin: 20px 0;
}

.form-part h2 {
    font-size: 25px;
    font-weight: 400;
    font-family: 'Josefin Sans', sans-serif;
    margin-bottom: 15px;
}

.check-boxes,
.radio-button,
.text-input {
    margin-bottom: 13px;
}

.check-boxes label,
.radio-button label,
.text-input label {
    display: block;
    margin-bottom: 3px;
    font-family: 'Josefin Sans', sans-serif;
    font-size: 14px;
    font-weight: 600;
}

.check-boxes label,
.radio-button label {
    margin-bottom: 7px;
    font-weight: 900;
}

.text-input input,
.text-input select,
.text-input textarea {
    padding: 10px;
    display: block;
    width: 100%;
    border: solid 3px #ccc;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
}

.text-input select {
    width: 100%;
}

.text-input textarea {
    height: 100px;
}

.sqr-check-input .check-boxes,
.sqr-input .text-input,
.sqr-radio-input .radio-button {
    float: left;
    width: 45%;
}

.sqr-check-input .check-boxes:nth-child(1),
.sqr-input .text-input:nth-child(1),
.sqr-radio-input .radio-button:nth-child(1) {
    margin-right: 10%;
}

.cub-input .text-input {
    float: left;
    width: 26.66%;
}

.cub-input .text-input:nth-child(1),
.cub-input .text-input:nth-child(2) {
    margin-right: 10%;
}

.ns-radio-btn input[type="radio"],
.ns-check-box input[type="checkbox"] {
    visibility: hidden;
}

.ns-radio-btn {
    width: 20px;
    height: 20px;
    display: inline-block;
    float: left;
    margin: 3px 7px 0 0;
    cursor: pointer;
    position: relative;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 3px solid #ccc;
    box-shadow: 0 0 1px #ccc;
    background: rgb(255, 255, 255);
    background: -moz-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(47%, rgba(246, 246, 246, 1)), color-stop(100%, rgba(237, 237, 237, 1)));
    background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: -o-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: -ms-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=  '#ffffff', endColorstr='#ededed', GradientType=0))))))
}

.checkedRadio {
    -moz-box-shadow: inset 0 0 5px 1px #ccc;
    -webkit-box-shadow: inset 0 0 5px 1px #ccc;
    box-shadow: inset 0 0 5px 1px #ccc;
}

.ns-radio-btn i {
    border: 1px solid #E1E2E4;
    width: 10px;
    height: 10px;
    position: absolute;
    left: 4px;
    top: 4px;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
}

.checkedRadio i {
    background-color: #898A8C;
}

.ns-check-box {
    width: 22px;
    height: 22px;
    cursor: pointer;
    display: inline-block;
    margin: 2px 7px 0 0;
    position: relative;
    overflow: hidden;
    box-shadow: 0 0 1px #ccc;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background: rgb(255, 255, 255);
    background: -moz-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(47%, rgba(246, 246, 246, 1)), color-stop(100%, rgba(237, 237, 237, 1)));
    background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: -o-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: -ms-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr= '#ffffff', endColorstr='#ededed', GradientType=0)) border: 1px solid #ccc;
}

.ns-check-box i {
    background: url("http://cdn1.iconfinder.com/data/icons/mimiGlyphs/16/check_mark.png") no-repeat center center;
    position: absolute;
    left: 3px;
    bottom: -15px;
    width: 16px;
    height: 16px;
    opacity: 0.5;
    -webkit-transition: all 400ms ease-in-out;
    -moz-transition: all 400ms ease-in-out;
    -o-transition: all 400ms ease-in-out;
    transition: all 400ms ease-in-out;
    -webkit-transform: rotateZ(-180deg);
    -moz-transform: rotateZ(-180deg);
    -o-transform: rotateZ(-180deg);
    transform: rotateZ(-180deg);
}

.checkedBox {
    -moz-box-shadow: inset 0 0 5px 1px #ccc;
    -webkit-box-shadow: inset 0 0 5px 1px #ccc;
    box-shadow: inset 0 0 5px 1px #ccc;
    border-bottom-color: #fff;
}

.checkedBox i {
    bottom: 2px;
    -webkit-transform: rotateZ(0deg);
    -moz-transform: rotateZ(0deg);
    -o-transform: rotateZ(0deg);
    transform: rotateZ(0deg);
}

.check-boxes ul li,
.radio-button ul li {
    display: inline-block;
    vertical-align: top;
    margin-right: 30px;
    margin-bottom: 7px;
}

.sqr-check-input .check-boxes ul li,
.sqr-radio-input .radio-button ul li {
    margin-right: 15px;
}

.radio-button ul li span {
    display: inline-block;
    margin-top: 8px;
    font-family: 'Josefin Sans', sans-serif;
}

.check-boxes ul li span {
    display: inline-block;
    vertical-align: top;
    margin-top: 5px;
    font-family: 'Josefin Sans', sans-serif;
}

.sqr-input .text-input .sqr-input .text-input:nth-child(1) {
    margin-right: 15%;
    width: 40%;
}

.margin-bottom-zero {
    margin-bottom: 0;
}

#pembayaran {
  width: 800px;
    margin: 0px 200px;
}
.verif{
    position:absolute;
    margin-top: 250px;
    margin-left: 400px;
}

.verif input{
    width: 200px;
}

.upload{
    margin-left: 45px;
}

.upload:hover{
    background-color: black;
    color: white;
}
</style>
  <body>
      
  <div class="container">
    <div class="form-part">
    <h1>Pilih Donasi</h1>
    <?php 
            $querry="SELECT * FROM data_zakat WHERE id_zakat = $id_zakat";
            $result=mysqli_query($connect, $querry);
            $numm=mysqli_num_rows($result);
            $data = mysqli_fetch_assoc($result);
        
        ?>
    <div class="verif">
        <div class="form-inputs">
            <div class="sqr-input">
                <div class="text-input margin-bottom-zero">
        <form enctype='multipart/form-data' method='POST' action='verif.php'>
        <table border='0' align='center'>
            <tr>
                <td>File yang diupload</td>
                <td>:</td>
                <td><input required type='file' name='fupload'></td>
            </tr>
            <tr>
                <td>ID ZAKAT</td>
                <td>:</td>
                <td><input readonly value=" <?php echo $data['id_zakat']; ?>" name='id_zakat' rows='8' cols='40'></td>
            </tr
            
            <tr>
                <td colspan='4' align='center'><input class="upload" type='submit' value='upload' id="button"></td>
            </tr>
        </table>
        </form>
            </div>
        </div>
    </div>
</div>

    <div class="form-inputs">
        <div class="sqr-input">
            <div class="text-input margin-bottom-zero">
    <p><td><label for="id_zakat">ID ZAKAT</label></td>
        
            
        <td><input disabled value="<?php echo $data['id_zakat']; ?>" type="text" name="id_zakat"><br></td></p>

    <label>Jenis Donasi : </label>
    <select disabled value="<?php echo $data['jenis_zakat']; ?>" name="jenis_zakat">
        <option value="Zakat Maal">Zakat Maal</option>
        <option value="Zakat Penghasilan">Zakat Penghasilan</option>
        <option value="Fidyah">Fidyah</option>
        <option value="Sedekah">Sedekah</option>
    </select>
        <!-- <p><td><label for="nama">Jenis Zakat</label></td>
        <td>:</td>
        <td><input type="text" name="jenis_zakat" id="nama"></td></p> -->

        <p><td><label for="telp">Nominal</label></td>
        
        <td><input disabled value="<?php echo $data['nominal']; ?>" type="text" name="nominal" id="telp"><br></td></p>

        <h1>Profil Muzaki</h1>
        <p><td><label for="nama">Nama Lengkap</label></td>
        <td><input disabled value="<?php echo $data['nama_lengkap']; ?>" type="text" name="nama_lengkap" id="nama"></td></p>

        <p><td><label for="telp">Alamat</label></td>
        
        <td><input disabled value="<?php echo $data['alamat']; ?>" type="text" name="alamat" id="telp"><br></td></p>

        <p><td><label for="telp">Email</label></td>
        
        <td><input  disabled value="<?php echo $data['email']; ?>" type="text" name="email" id="telp"><br></td></p>

        <p><td><label for="telp">No.Hp</label></td>
        
        <td><input disabled value="<?php echo $data['no_hp']; ?>" type="text" name="no_hp" id="telp"><br></td></p>

        <label>Metode Pembayaran : </label>
        <select disabled value="<?php echo $data['metode_pembayaran']; ?>" name="metode_pembayaran">
            <option value="BCA">BCA</option>
            <option value="BNI">BNI</option>
            <option value="BRI">BRI</option>
        </select>
        <br>
   
</div>
</div>
</div>
</div>
</div>





  </body>
</html>