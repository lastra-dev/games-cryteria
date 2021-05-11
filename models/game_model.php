<?php
class Game_model extends Model
{
  public function __construct()
  {
    parent::__construct();
  }

  function get_data($gameId)
  {
    $key = $_ENV['RAWG_KEY'];
    $url = "https://api.rawg.io/api/games/" . $gameId . "?key=" . $key;
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $output = curl_exec($ch);

    curl_close($ch);

    $result = json_decode($output, true);
    return $result;
  }

  public function get_rating($gameId)
  {
    try {
      $query = $this->db->connect()->query("SELECT rating FROM games WHERE id=" . $gameId);
      $rating = $query->fetch();
      return $rating;
    } catch (PDOException) {
      return "Not rated yet";
    }
  }

  public function set_rating($data)
  {
    try {
      $query = $this->db->connect()->prepare(
        "CALL insert_rating
        (:accountId, :gameId, :rating)"
      );
      $query->execute([
        'accountId' => $_SESSION['id'],
        'gameId' => $data['gameId'],
        'rating' => $data['rating'],
      ]);
      return true;
    } catch (PDOException) {
      return false;
    }
  }

  public function get_user_rating($data)
  {
    try {
      $query = $this->db->connect()->prepare(
        "SELECT rating FROM account_ratings 
         WHERE game_id = :gameId AND account_id = :accountId"
      );
      $query->execute([
        'gameId' => $data['gameId'],
        'accountId' => $_SESSION['id']
      ]);
      $result = $query->fetch();
      if ($result) {
        return $result;
      } else {
        return false;
      }
    } catch (PDOException) {
      return false;
    }
  }
}
