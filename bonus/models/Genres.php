<?php
class Genres
{

	public $array_genres;

	public function __construct($_array_genres)
	{
		$this->array_genres = $_array_genres;
	}
	//funzione che trasforma l'array dei generi in stringa
	public function getStringGenres()
	{
		return implode(', ', $this->array_genres);
	}
}
