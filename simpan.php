<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendaftaran_kampus";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_POST['Submit'] == "Submit") {
	$name 		= $_POST['name'];
	$address 	= $_POST['address'];
	$telp 		= $_POST['telp'];
	$gender 	= $_POST['gender'];
	$email		= $_POST['email'];
	$religion	= $_POST['religion'];
	$school		= $_POST['school'];
}

// echo $name;

$sql = mysqli_query($conn, "INSERT INTO form_pendaftar (nama_pendaftar, alamat_pendaftar, no_telp_pendaftar, jk_pendaftar, email_pendaftar, agama, asal_sma) VALUES ('$name', '$address', '$telp', '$gender', '$email', '$religion', '$school')");

?>