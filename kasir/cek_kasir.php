<?php
session_start();


//authcheck kasir
if (isset($_SESSION['userid'])) {
  if ($_SESSION['roleid'] == 1) {
    // redirect ke halaman admin
    header("Location:index.php");
  }
} else {
  $_SESSION['error'] = 'Anda harus login dahulu';
  header("location:login.php");
}
