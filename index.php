<?php
//DEFINIZIONE CLASSE 'MOVIE
class Movie
{
	//proprietà dell'istanza
	public $title;
	public $year;
	public $genre;
	public $vote;
	// construct 
	public function __construct($_title, $_year, $_genre, $_vote)
	{
		$this->title = $_title;
		$this->year = $_year;
		$this->genre = $_genre;
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
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php
				$film_1 = new Movie('Il Signore Degli Anelli', ' 2001', ' fantasy', 9.3);
				var_dump($film_1);
				echo $film_1->getStatus();
				$film_2 = new Movie('Spiderman', '2021', 'Azione', 6.3);
				var_dump($film_2);
				echo $film_2->getStatus();
				?>
			</div>
		</div>
	</div>
</body>

</html>