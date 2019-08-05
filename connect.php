<?php
  $host = "localhost";
  $db = "db_zakat";
  $uname = "root";
  $pass = "";
  $connect = mysqli_connect($host, $uname, $pass, $db);
if (!$connect) {
  echo "Koneksi ke database gagal : " . mysql_conenect_error();
}