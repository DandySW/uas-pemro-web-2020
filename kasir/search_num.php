<?php
include('session.php');
if (isset($_POST['num'])) {
	$search = $_POST['name'];
	$query = mysqli_query($conn, "SELECT * FROM `product` where nama like '%$search%'");
	echo mysqli_num_rows($query);
}
