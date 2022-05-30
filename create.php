<?php
$message = ""; // initial message 
if (isset($_POST['submit_data'])) {

	// Includs client to get $client object
	include 'lib/client.php';

	// Gets the data from post
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$email = $_POST['email'];


	/**
	 * Calling the "insert" method by "__soapCall" from SOAP SERVER 
	 * $client: object of SOAP CLIENT
	 * @params: $name, $email, $address
	 */
	if ($client->__soapCall("insert", array($nim, $nama, $alamat, $nohp, $email))) {
		$message = "Data is inserted successfully.";
	} else {
		$message = "Sorry, Data is not inserted.";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Create Data</title>
</head>

<body>
	<div style="width: 500px; margin: 20px auto;">

		<!-- showing the message here-->
		<div><?php echo $message; ?></div>

		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<form action="create.php" method="post">
				<tr>
					<td>NIM:</td>
					<td><input name="nim" type="text"></td>
				</tr>
				<tr>
					<td>Nama:</td>
					<td><input name="nama" type="text"></td>
				</tr>
				<tr>
					<td>Alamat:</td>
					<td><textarea name="alamat"></textarea></td>
				</tr>
				<tr>
					<td>No hp:</td>
					<td><input name="nohp" type="text"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input name="email" type="text"></td>
				</tr>

				<tr>
					<td><a href="read.php">See Data</a></td>
					<td><input name="submit_data" type="submit" value="Insert Data"></td>
				</tr>
			</form>
		</table>
	</div>
</body>

</html>