<?php
class Signup_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insert($data)
	{
		$query = $this->db->connect()->prepare(
			'INSERT INTO accounts(id, username, name, email, password) VALUES
			(NULL, :username, :name, :email, :password)'
		);
		$query->execute([
			'username' => $data['username'],
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => $data['password']
		]);
	}
}
