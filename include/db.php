<?php
    $conn = mysqli_connect('localhost', 'root', '123456', 'construction');
    if(mysqli_connect_errno()){
    echo 'failed to connect to mysql'.$mysqli_connect_errno();
    }
?>