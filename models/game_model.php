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
}
