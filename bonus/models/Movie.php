<?php
//DEFINIZIONE CLASSE 'MOVIE
class Movie
{
	//proprietà dell'istanza
	public $title;
	public $img;
	public $year;
	public $genres; //istanza
	public $vote;
	// construct 
	public function __construct($_title, $_img, $_year, Genres $_genres, $_vote)
	{
		$this->title = $_title;
		$this->img = $_img;
		$this->year = $_year;
		$this->genres = $_genres; //istanza
		$this->vote = $_vote;
	}
	//funzione che ritorna un giudizio in base al voto
	public function getStatus()
	{
		$vote = $this->vote;
		if ($vote >= 9) {
			return 'Masterpiece';
		} elseif ($vote < 9 && $vote > 7) {
			return 'Good';
		} elseif ($vote <= 7 && $vote >= 6) {
			return 'Average';
		} else {
			return 'Bad';
		}
	}
	//funzione per recuperare l'array dei generi dall'istanza della classe Genres
	public function getArrayGenres()
	{
		return $this->genres->getArrayGenres();
	}

	//funzione per restituire l'immagine
	public function getImgHtml()
	{
		return '<img src="' . $this->img . '" class="card-img-top">';
	}
}
