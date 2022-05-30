<?php
// Includs client to get $client object
include 'lib/client.php';

/**
 * Calling the "getAll" method by "__soapCall" from SOAP SERVER 
 * $client: object of SOAP CLIENT
 * @params: null
 */
$result = $client->__soapCall("getAll", array());

?>
<!DOCTYPE html>
<html>

<head>
	<title>Data List</title>
</head>

<body>
	<div style="width: 500px; margin: 20px auto;">
		<a href="create.php">Create New</a>
		<br>
		<br>
		<table width="100%" cellpadding="5" cellspacing="1" border="1">
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No Hp</th>
				<th>Email</th>

			</tr>
			<?php foreach ($result as $row) { ?>
				<tr>
					<td><?php echo $row['nim']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['alamat']; ?></td>
					<td><?php echo $row['nohp']; ?></td>
					<td><?php echo $row['email']; ?></td>

					<td>
						<a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> |
						<a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>

</html>