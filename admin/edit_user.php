<?php
include('session.php');

$id = $_GET['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];

$use = mysqli_query($conn, "SELECT * FROM user WHERE userid='id'");
$urow = mysqli_fetch_array($use);

mysqli_query($conn, "UPDATE user SET nama='$name', username='$username', password='$password' where userid='$id'");

?>
<script>
	window.alert('Data User berhasil diubah.');
	window.history.back();
</script>
<?php

?>