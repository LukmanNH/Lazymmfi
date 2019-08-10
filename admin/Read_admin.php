<?php 
session_start();
if (!(isset($_SESSION['user'])))
{
  header("location: ../login/form-login.php");
}
$nama = $_SESSION['user'];

    include '../connect.php';
    $query="SELECT * FROM data_zakat";
    $result=mysqli_query($connect, $query);
    $num=mysqli_num_rows($result);
?>
<title>ADMIN | Muzakki</title>
<link rel=icon type="image/png" href="../images/favicon.png">
<style>
body {
  background: #f5f5f5;
  padding: 0;
  margin: 0;
}
h1 {
    font: 600 1.5em/1 'Raleway', sans-serif;
    color: rgba(0,0,0,.5);
    text-align: center;
    text-transform: uppercase;
    letter-spacing: .5em;
    top: 25%;
    width: 100%;
}

.md-ui.component-data-table {
  background: #fff;
  border: 0;
  border-radius: 2px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  font-family: "Roboto", sans-serif;
  font-size: 13px;
  font-weight: 300;
  margin: 2em;
  width: auto;
  /* START - main table header */
  /* END - main table header */
  /* START - main table wrapper */
  /* END main table wrapper */
  /* START main table footer */
  /* END main table footer */
}

.md-ui.component-data-table .main-table-header {
  padding: 24px 14px 24px 24px;
}
.md-ui.component-data-table .main-table-header .table-header--title {
  color: rgba(0, 0, 0, 0.87);
  font-weight: 100;
  font-size: 20px;
  margin: 0;
  display: inline-block;
}
.md-ui.component-data-table .main-table-header .table-header--icons {
  font-size: 24px;
  float: right;
  vertical-align: middle;
}
.md-ui.component-data-table .main-table-header .table-header--icons .material-icons:first-child {
  margin-left: 100px;
}
.md-ui.component-data-table .main-table-wrapper {
  display: block;
  max-width: 100%;
  overflow-x: auto;
  /* START data table content */
}
.md-ui.component-data-table .main-table-wrapper .main-table-content {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  overflow: hidden;
  /* START - data table header */
  /* END - data table header */
  /* START - data table content */
  /* END data table content */
}
.md-ui.component-data-table .main-table-wrapper .main-table-content tr {
  border-bottom: 1px solid #e0e0e0;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content tr td {
  text-overflow: ellipsis;
  padding: 0 56px 0 0;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content tr td:first-child {
  padding: 0 56px 0 24px;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content tr td:last-child {
  padding: 0 24px 0 0;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content tr td.datatype-string {
  text-align: left;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content tr td.datatype-numeric {
  text-align: right;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content .data-table-header tr {
  height: 64px;
  
  padding: 0;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content .data-table-header tr td {
  color: rgba(0, 0, 0, 0.54);
 
  font-size: 12px;
  font-weight: 500;
  vertical-align: middle;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content .data-table-header tr td .material-icons {
  font-size: 18px;
  vertical-align: middle;
  margin-left: -20px;
  padding-right: 8px;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content .data-table-content tr {
  height: 48px;
  cursor: pointer;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content .data-table-content tr:hover {
  background: #eee;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content .data-table-content tr td {
  color: rgba(0, 0, 0, 0.87);
  font-weight: 500;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content .data-table-content tr td input[type="text"] {
  background: transparent;
  border: 0;
  color: #212121;
  font-family: "Roboto", sans-serif;
  font-size: 13px;
  font-weight: 400;
  height: 40px;
}
.md-ui.component-data-table .main-table-wrapper .main-table-content .data-table-content tr td input[type="text"]::placeholder {
  color: rgba(0, 0, 0, 0.38);
}
.md-ui.component-data-table .main-table-footer {
  color: rgba(0, 0, 0, 0.54);
  font-size: 12px;
  text-align: right;
  padding: 22px 0;
}
.md-ui.component-data-table .main-table-footer span {
  vertical-align: middle;
}
.md-ui.component-data-table .main-table-footer span .material-icons {
  font-size: 24px;
  vertical-align: middle;
  cursor: pointer;
}
.md-ui.component-data-table .main-table-footer span.rows-selection {
  padding-right: 32px;
}
.md-ui.component-data-table .main-table-footer span.rows-selection .rows-selection-label {
  padding-right: 38px;
}
.md-ui.component-data-table .main-table-footer span.rows-amount {
  padding-right: 32px;
}
.md-ui.component-data-table .main-table-footer span.table-pagination {
  padding-right: 14px;
}
.md-ui.component-data-table .main-table-footer span.table-pagination .material-icons:first-child {
  padding-right: 24px;
}


</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read ADMIN</title>
</head>
<body>
<a href="../login/logout.php" name='logout'>Logout</a>
<header class="main-table-header">
		<h1 class="table-header--title">Data Muzakki</h1>
</header>

<section class="md-ui component-data-table">


<div class="main-table-wrapper">

<table class="main-table-content">
  <thead class="data-table-header">
       <tr class="data-table-row">
          <th>No.</th>
          <th>Kode Zakat</th>
          <th>Nama Lengkap</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>No.HP</th>
          <th>Metode Pembayaran</th>
          <th>Jenis Zakat</th>
          <th>Nominal</th>
          <th>Status Verif</th>
          <th>Action</th>
       </tr>
  </thead>

       
      
       <?php
       if($num>0)
       {
         $no =1;
         while ($data =mysqli_fetch_assoc($result))
         {
           echo "<tbody class='data-table-content'>";
           echo "<tr>";
           echo "<td>".$no."</td>";
           echo "<td>".$data['id_zakat']."</td>";
           echo "<td>".$data['nama_lengkap']."</td>";
           echo "<td>".$data['alamat']."</td>";
           echo "<td>".$data['email']."</td>";
           echo "<td>".$data['no_hp']."</td>";
           echo "<td>".$data['metode_pembayaran']."</td>";
           echo "<td>".$data['jenis_zakat']."</td>";
           echo "<td>".$data['nominal']."</td>";
           echo "<td>".$data['status_verif']."</td>";
           echo "<td>
                      <a href='form_update.php?id_zakat=$data[id_zakat]'>Edit</a> |
                      <a href='delete.php?id_zakat=$data[id_zakat]'onclick'return confirm(\"Apakah Anda yakin ingin menghapus data?\")>Hapus</a>
                  </td>";
           echo "</tr>";
           echo "</tbody>";

           $no++;

           
         }
       }
       else
        {
      echo "<td colspan='3'>Tidak ada data</td>";
       }
        ?>

      </table>
      </div>

      <table>
       <?php
        $querry="SELECT jenis_zakat, SUM(nominal) FROM data_zakat GROUP BY jenis_zakat";      
        $result1=mysqli_query($connect,$querry);
        // Print out result
        while($row=mysqli_fetch_array($result1)){    
            echo"Total ".$row['jenis_zakat']." = Rp.".$row['SUM(nominal)'];    echo"<br />";
        }
      ?>
      </table>

      

      <button onclick="window.print()">Cetak</button>

      <a href="read2_admin.php">Lihat Bukti Pembayaran</a>

      
  </section>
    
</body>
</html>

