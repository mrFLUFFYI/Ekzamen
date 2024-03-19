<?php

    $connect = mysqli_connect('localhost', 'root', '', 'testt');

    if (!$connect) {
        die('Error connect to DataBase');
    }