<?php
    include '../connect.php';
    $id_zakat = $_GET['id_zakat'];
    $query = "SELECT * FROM data_zakat WHERE id_zakat = $id_zakat";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="../images/favicon.png">
        <title>Lazymmfi | Invoice</title>

        <style>

            * {
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                text-align: center;
            }

            #box {
                width: 500px;
                height: 440px;
                padding: 50px;
                border: 1px solid green;
                border-radius: 10px;
                margin: 0 30%;
            }
        </style>

    </head>
    <body>

        <br>
        <br>
        <br>

        <h2>Terima kasih atas donasi anda melalui bank
            <?php echo $row['metode_pembayaran']; ?>
        </h2>
        <br>
        <div id="box">

            <img src="../images/checked.png" alt="">

            <br>
            <br>
            <br>

            <p>Terima kasih telah melakukan donasi melalui
                <b>Lazymmfi</b>
            </p>
            <p>berikut adalah resume donasi
                <b>
                    <?php echo $row['nama_lengkap']; ?></b>
                :
            </p>
            <br>
            <p>Kode Zakat =
               <b> <?php echo $row['id_zakat']; ?> </b>
            </p>
            <p>Email :
                <b><?php echo $row['email']; ?></b>
            </p>
            <p>Jenis Donasi :
                <b><?php echo $row['jenis_zakat']; ?></b>
            </p>
            <p>Nominal :
                <b><?php echo $row['nominal']; ?></b>
            </p>

            <br>
            <p>silakan lakukan pembayaran segera ke rekening berikut ini :</p>
            <br>
            <p>BCA :
                <b>321 890123</b>
            </p>
            <p>BNI :
                <b>190 102912</b>
            </p>
            <p>BRI :
                <b>891 102930</b>
            </p>
            <br>
            <p>Atas Nama : Lazymmfi</p>
        </div>
        <br>
        <!-- <form action="update.php"> <input type="submit" name="btnSimpan"
        value="Konfirmasi Pembayaran"> </form> -->

        <?php 
        $querry="SELECT * FROM data_zakat WHERE id_zakat = $id_zakat";
        $result=mysqli_query($connect, $querry);
        $numm=mysqli_num_rows($result);
        $data = mysqli_fetch_assoc($result);
        
    echo "<td> <a href='form_verif.php?id_zakat=$data[id_zakat]'>Konfirmasi Sekarang</a>
           </td>";

    ?>

    </body>
</html>