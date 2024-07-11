<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "biblioteca";

    $ligacao = mysqli_connect($server, $user, $pass, $db)

    if ($ligacao -> connect_error){

        die(mysqli_error($ligacao));
    }
?>
