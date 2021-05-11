<?php
class Signin_model extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function login($data)
  {
    try {
      $query = $this->db->connect()->prepare(
        'SELECT * FROM accounts WHERE username = :username AND password = :password'
      );
      $query->execute([
        'username' => $data['username'],
        'password' => $data['password']
      ]);

      $result = $query->fetch();

      if ($result) {
        return $result['id'];
      } else {
        return false;
      }
    } catch (PDOException) {
      return false;
    }
  }
}
