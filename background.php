<?php
    include_once 'dbh.php';

    header("Location: ../order.php?signup=sucess");
    $first = $_POST['firstname'];
    $last = $_POST['lastname'];
    $room = $_POST['room'];
    $start = $_POST['staydatebeginning'];
    $end = $_POST['staydateend'];
    $email = $_POST['email'];

    $sql = "INSERT INTO guestinfo (firstname, lastname, room, staydatebeginning, staydateend, email) 
    VALUES ('$first', '$last', '$room', '$start', '$end', '$email');";
    mysqli_query($conn, $sql);

    
?>