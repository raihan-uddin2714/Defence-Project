<?php
    $db = mysqli_connect('localhost','root','','raihan_defence');

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>