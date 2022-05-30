<?php
class Db
{

	// Host and Database information
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db   = "academic";
	private $mysqli;

	public function __construct()
	{

		// Database Connection
		$this->mysqli = new Mysqli($this->host, $this->user, $this->pass, $this->db);

		// Checking the connection is okay or not
		if ($this->mysqli->connect_error) {
			global $mysqli; // add this
			die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
		}
	}

	/**
	 * Closing the DB connection
	 * @params null
	 * @return void 
	 */
	public function __destruct()
	{
		$this->mysqli->close();
	}

	/**
	 * Data insertion in mahasiswa table
	 * @params $name, $email, $address
	 * @return (int) insert_id
	 */
	public function insert($nim, $nama, $alamat, $nohp, $email)
	{
		$this->mysqli->query("INSERT INTO mahasiswa (id, nim,nama, alamat, nohp,email) VALUES (null, '$nim', '$nama', '$alamat','$nohp','$email')");
		return $this->mysqli->insert_id;
	}

	/**
	 * Data updating in mahasiswa table
	 * @params $id, $nim, $nama, $alamat, $nohp, $email
	 * @return (boolean) 
	 */
	public function update($id, $nim, $nama, $alamat, $nohp, $email)
	{
		return $this->mysqli->query("UPDATE mahasiswa SET nim='$nim',  nama='$nama', alamat='$alamat', nohp='$nohp', email='$email' WHERE id=$id");
	}

	/**
	 * Data deletion from mahasiswa table
	 * @params $id
	 * @return (boolean) 
	 */
	public function delete($id)
	{
		return $this->mysqli->query("DELETE FROM mahasiswa WHERE id=$id");
	}

	/**
	 * Data retriving from mahasiswa table
	 * @params $condition (optional)
	 * @return (array) mixed
	 */
	public function getAll($condition = "")
	{
		$result = $this->mysqli->query("SELECT * FROM mahasiswa $condition");
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	/**
	 * Row data retriving from mahasiswa table according to $id
	 * @params $id
	 * @return (array) mixed
	 */
	public function getById($id)
	{
		return $this->mysqli->query("SELECT * FROM mahasiswa WHERE id=$id")->fetch_assoc();
	}
}
