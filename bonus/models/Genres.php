<?php
class Genres
{

	public $array_genres;

	public function __construct($_array_genres)
	{
		$this->array_genres = $_array_genres;
	}

	public function getArrayGenres()
	{
		return $this->array_genres;
	}
}
