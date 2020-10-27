<?php
session_start();

include('conn.php');

mysqli_query($con, "UPDATE userlog SET logout=NOW() WHERE userlogid='" . $_SESSION['userlog'] . "'");

session_destroy();
header('location:../index.php');
