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
	//funzione che ritorna il titolo dentro un h3
	public function getTitleHtml()
	{
		return '<h3>' . $this->title . '</h3>';
	}
	//funzione che ritorna un giudizio in base al voto
	public function getStatus()
	{
		$vote = $this->vote;
		if ($vote >= 9) {
			return 'Capolavoro';
		} elseif ($vote < 9 && $vote > 7) {
			return 'Ottimo';
		} elseif ($vote <= 7 && $vote >= 6) {
			return 'Discreto';
		} else {
			return 'Scadente';
		}
	}
	//funzione che ritorna l'immagine nel tag
	public function getImgHtml()
	{
		return '<img src="' . $this->img . '" class="card-img-top">';
	}
	//funzione che ritorna l'anno di uscita
	public function getYearHtml()
	{
		return 'Anno di uscita: ' . $this->year;
	}
	//funzione che ritorna l'array dei generi in formato stringa
	public function getStringGenresHtml()
	{
		return $this->genres->getStringGenres();
	}
}
