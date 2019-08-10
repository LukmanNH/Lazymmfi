<?php 
session_start();
if (!(isset($_SESSION['user'])))
{
  header("location: ../login/form-login.php");
}
$nama = $_SESSION['user'];


?>

<html>
<head>
<title>Gambar Thumbnail</title>
<style type="text/css">
 .gambar{
  border:1px solid #999;
  margin:3px;
  padding:5px;
 }
 .gambar:hover{
  background-color:#36F;
 }
 .gambar img{
  
 }
</style>
</head>

<body>

<?php
    mysql_connect("localhost","root","");
    mysql_select_db("db_zakat");
    $sql=mysql_query("select * from upload_file");

$no=1;
$jum_bar=3;
while ($row=mysql_fetch_array($sql)){
 echo "<label>$row[kode_zakat]</label>";
 echo "<a href=../user/$row[direktori] title='$row[nama_file]'><img class='gambar' src='../user/$row[direktori]' width=150px height=150px /></a>";
 if ($no % $jum_bar==0){
  echo "</br>"; 
 }
 $no++;
}
?>
</body>
</html>