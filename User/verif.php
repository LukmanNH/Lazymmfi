<?php
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file = $_FILES['fupload']['name'];
  $ukuran_file = $_FILES['fupload']['size'];
  $direktori = "files/$nama_file";
   
  //apabila file berhasil diupload
  if (move_uploaded_file($lokasi_file,"$direktori")) {
    echo "Nama File : <b>$nama_file</b> sukses diupload<br>";
    echo "Ukuran File : <b>$ukuran_file</b> bytes";
     
    //masukan informasi ke dalam database
    mysql_connect("localhost","root","");
    mysql_select_db("db_zakat");
    $sql = "INSERT INTO upload_file(nama_file,ukuran_file,kode_zakat,direktori) values ('$nama_file','$ukuran_file','$_POST[kode_zakat]','$direktori')";
    mysql_query($sql);
    echo "<br>";
    echo "<a href='../index.php'>Kembali ke HOME</a>";

  }else{
    echo "File gagal diupload.";
  }
?>