<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Jadwal</title>
    <link rel="stylesheet" href="stylebooking.css">
</head>
<body>
    <div class="form">
        <h3>BUAT JADWAL PERAWATAN KUCING</h3><br>
        <form action="" method="post">
            <label for="">Nama</label><br>
            <input type="text" name="bnama" id=""> <br><br>
            <label for="">Jenis Perawatan</label><br>
            <select name="rawat" class="select">
                <option value="...">...</option>
                <option value="GROOMING">Grooming</option>
                <option value="VACCINATION">Vaksin</option>
                <option value="STERILIZATION">Steril</option>
                <option value="SEMUA PERAWATAN">All.</option>
            </select><br><br>
            <label for="">Nama Kucing</label><br>
            <input type="text" name="knama" id=""> <br><br>
            <button type="submit" name='submit' class="submit">TAMBAH</button>
        </form>
    </div>
</body>
</html>


<?php
    require 'config.php';
    if (isset($_POST['submit'])){
        $bnama = $_POST['bnama'];
        $bjenis = $_POST['rawat'];
        $knama = $_POST['knama'];

        $result = mysqli_query($db, 
                "INSERT INTO kucing (bnama,bjenis,knama) VALUES('$bnama','$bjenis','$knama')");
                if ($result) {
                    header("Location:schedule.php");
                }
    }
?> 
 