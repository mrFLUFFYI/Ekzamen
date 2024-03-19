<?php

require_once 'connect.php';

$Familia = $_POST['familia'];
$Ima = $_POST['ima'];
$Otchestvo = $_POST['otchestvo'];
$Email = $_POST['email'];
$Password = $_POST['password'];

mysqli_query($connect, query: "INSERT INTO `klient` (`ID`, `Familia`, `Ima`, `Otchestvo`, `Email`, `Parol`) VALUES (NULL, '$Familia', '$Ima', '$Otchestvo', '$Email', '$Password')" );
header('Location: ekz_avor.php');