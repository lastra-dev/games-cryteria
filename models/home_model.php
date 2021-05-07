<?php
include_once 'models/rating.php';

class Home_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$ratings = [];
		try {
			$query = $this->db->connect()->query("SELECT * FROM games");

			while ($row = $query->fetch()) {
				$rating = new Rating();
				$rating->id = $row['id'];
				$rating->rating = $row['rating'];

				array_push($ratings, $rating);
			}
			return $ratings;
		} catch (PDOException) {
			return [];
		}
	}
}
