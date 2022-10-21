<?php
    require 'config.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];

        $result = mysqli_query($db, "DELETE FROM kucing WHERE id ='$id'");

        if($result) {
            header("Location:schedule.php");
        }else{
            echo "Error";
        }


    }

?>