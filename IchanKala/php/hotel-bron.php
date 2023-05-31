<?php

    $ismi = $_REQUEST['ismi'];
    $familya = $_REQUEST['familya'];
    $t_raqami = $_REQUEST['t_raqami'];
    $e_pochta = $_REQUEST['e_pochta'];
    $kelish_vaqti = $_REQUEST['kelish_vaqti'];
    $ketish_vaqti = $_REQUEST['ketish_vaqti'];
    $mehmonlar_soni = $_REQUEST['mehmonlar_soni'];
    $xonalar_soni = $_REQUEST['xonalar_soni'];

    $db = mysqli_connect('localhost', 'root', '', 'khiva');

    $sql = "INSERT INTO hotel(ismi, familya, t_raqami, e_pochta, kelish_vaqti, ketish_vaqti, mehmonlar_soni, xonalar_soni) VALUES ('$ismi', '$familya', '$t_raqami', '$e_pochta', '$kelish_vaqti', '$ketish_vaqti', '$mehmonlar_soni', '$xonalar_soni')";
    if($db->query($sql) === TRUE) {
        header('Location:../pages/add-card.html');
    }
    else {
        header('Location:../pages/hotel-bron.html');
    }
?>