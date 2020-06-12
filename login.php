<?php
include('conn.php');
session_start();
function check_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = check_input($_POST['username']);

	if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
		$_SESSION['msg'] = "Username tidak boleh mengandung spasi dan karakter";
		header('location: index.php');
	} else {

		$fusername = $username;

		$password = check_input($_POST["password"]);
		$fpassword = $password;

		$query = mysqli_query($conn, "SELECT * FROM `user` WHERE username='$fusername' AND password='$fpassword'");

		if (mysqli_num_rows($query) == 0) {
			$_SESSION['msg'] = "Login Gagal. Username atau Password salah";
			header('location: index.php');
		} else {

			$row = mysqli_fetch_array($query);
			if ($row['roleid'] == 1) {
				$_SESSION['id'] = $row['userid'];
?>
				<script>
					window.alert('Login berhasil. Selamat datang <?= $row['nama'] ?>! (<?= $row['username'] ?>)');
					window.location.href = 'admin/';
				</script>
			<?php
			} elseif ($row['roleid'] == 2) {
				$_SESSION['id'] = $row['userid'];
			?>
				<script>
					window.alert('Login berhasil. Selamat Datang <?= $row['nama'] ?>! (<?= $row['username'] ?>)');
					window.location.href = 'kasir/';
				</script>
<?php
			}
		}
	}
}
?>