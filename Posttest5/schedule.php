<?php
    require 'config.php';
    $result = mysqli_query($db,
            "SELECT * FROM kucing");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
    <link rel="stylesheet" href="styletable.css">
</head>
<body>
        <nav>
            <a href="index.php"><img class="Logo" src="img/Logo.png" alt="Cat Paw" id="logo"></a>
            <div  class="nav-links" id="navlink">
                <ul id="menuList">
                    <li><a href="#Home">Home</a></li>
                    <li id="teksaboutus"><a href="#AboutUsHome">About Us</a></li>
                    <li id="teksservice"><a href="#ServiceHome">Service</a></li>
                    <li><a class="login2" href="#Home">Login</a></li>
                    <li id="darkmode2"><p class="darkmode2">Dark Mode</p></li>
                    <!-- <li><a class="login" href="#Home"><button>Login</button></a></li> -->
                </ul>
                <img src="img/close.png" id="close">
            </div>
            <img src="img/menu.png" alt="menu" id="menu">
            <img src="img/darkmode.png" alt="darkmode" class="darkmode" id="btnmode">
        </nav>
    <div class="table_head">
        <h3>JADWAL PERAWATAN KUCING</h3>
        <div>
            <button class = "add"><a href="booking.php"><img src="img/addw.png" alt="Tambah Data"></a></button>
        </div>
    </div>

    <div class="table">
    <table border='1'>
        <tr>
            <th>NO</th>
            <th>NAMA PEMILIK</th>
            <th>JENIS PERAWATAN</th>
            <th>NAMA KUCING</th>
            <th colspan='2'>Actions</th>
        </tr>
            <?php
            $i = 1;
                while ($row = mysqli_fetch_array($result)){  
            ?>
        <tr>
           <td><?=$i?></td>
           <td><?=$row['bnama']?></td>
           <td><?=$row['bjenis']?></td>
           <td><?=$row['knama']?></td>
           <td class = "edit"><a href="editbook.php?id=<?=$row['id']?>"><img src="img/edit.png" alt="edit"></a></td>
           <td class = "hapus" ><a href="hapusbook.php?id=<?=$row['id']?>"><img src="img/delete.png" alt="hapus"></a></td>
        </tr>
            <?php 
                $i++;   
                }
            ?>
    </table>
    </div>
</body>
</html>



