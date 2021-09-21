<?php

session_start();

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "healthmaniac";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);