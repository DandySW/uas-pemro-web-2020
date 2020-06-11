<?php

include('session.php');

$cpass = $_POST['cpass'];
$repass = $_POST['repass'];

if ($cpass != $repass) {
?>
	<script>
		window.alert('Password yang dimasukkan tidak sesuai. Akun tidak diubah.');
		window.history.back();
	</script>
<?php
} elseif ($cpass != $srow['password']) {
?>
	<script>
		window.alert('Password saat ini tidak sesuai. Akun tidak diubah.');
		window.history.back();
	</script>
<?php
} else {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($password == $srow['password']) {
		$fipassword = $password;
	} else {
		$fipassword = $password;
	}
	mysqli_query($conn, "UPDATE `user` SET username='$username', password='$fipassword' where userid='" . $_SESSION['id'] . "'");
?>
	<script>
		window.alert('Akun berhasil diubah');
		window.history.back();
	</script>
<?php
}

?>