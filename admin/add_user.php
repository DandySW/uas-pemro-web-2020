<?php
include('session.php');

$name		= $_POST['name'];
$username	= $_POST['username'];
$password	= $_POST['password'];
$access		= $_POST['access'];

mysqli_query($conn, "INSERT INTO user (nama, username, password, roleid) values ('$name','$username', '$password', '$access')");
$userid = mysqli_insert_id($conn);


?>
<script>
	window.alert('Berhasil menambahkan User baru.');
	window.history.back();
</script>
<?php
?>