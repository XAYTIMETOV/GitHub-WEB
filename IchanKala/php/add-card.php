<?php

    $card_number = $_REQUEST['card_number'];
    $cvv = $_REQUEST['cvv'];
    $card_name = $_REQUEST['card_name'];
    

    $db = mysqli_connect('localhost', 'root', '', 'khiva');

    $sql = "INSERT INTO addcard(card_number, cvv, card_name)
    VALUES ('$card_number', '$cvv', '$card_name')";
    if($db->query($sql) === TRUE) {
        header('Location:../pages/service.html');
    }
    else {
        header('Location:../pages/hotel-bron.html');
    }
?>