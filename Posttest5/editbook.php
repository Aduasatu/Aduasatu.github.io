<?php
    require 'config.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $result = mysqli_query($db, "SELECT * FROM kucing WHERE id = '$id'");
    $row = mysqli_fetch_array($result);

    if (isset($_POST['submit'])){
        $bnama = $_POST['bnama'];
        $bjenis = $_POST['rawat'];
        $knama = $_POST['knama'];

        $result = mysqli_query($db, 
                "UPDATE kucing SET bnama='$bnama', bjenis='$bjenis', knama='$knama' WHERE id='$id'");
                if ($result) {
                    header("Location:schedule.php");
                }
    }
?> 
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal</title>
    <link rel="stylesheet" href="styleedit.css">
</head>
<body>
    <div class="form">  
        <h3>EDIT JADWAL PERAWATAN KUCING</h3><br>
        <form action="" method="post">
            <label for="">Nama</label><br>
            <input type="text" name="bnama" value=<?=$row['bnama']?>> <br><br>
            <label for="">Jenis Perawatan</label><br>
            <select name="rawat" class="select" value=<?=$row['bjenis']?>>
                <option value="...">...</option>
                <option value="GROOMING">Grooming</option>
                <option value="VACCINATION">Vaksin</option>
                <option value="STERILIZATION">Steril</option>
                <option value="SEMUA PERAWATAN">All.</option>
            </select><br><br>
            <label for="">Nama Kucing</label><br>
            <input type="text" name="knama" value=<?=$row['knama']?>> <br><br>
            <button type="submit" name='submit' class="submit">EDIT</button>
        </form>
    </div>
</body>
</html>