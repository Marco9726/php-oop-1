<?php
include __DIR__ . '/models/Movie.php';
include __DIR__ . '/models/Genres.php';

$genres = [
	'FN-DR' => new Genres(['Fantasy', 'Drammatico']),
	'AV-FN-AZ' => new Genres(['Avventura', 'Fantasy', 'Azione']),
	'CM-AN' => new Genres(['Commedia', 'Animazione'])
];

$movies = [
	$LotR = new Movie(
			'Il Signore degli Anelli',
			'https://m.media-amazon.com/images/I/71sLg08monL._SL1073_.jpg',
			'2001',
			$genres['FN-DR'],
			10
		),
	$StarWars = new Movie(
			'Star Wars',
			'https://media-assets.wired.it/photos/627237de4ab2e01c631311e6/2:3/w_867,h_1301,c_limit/STAR-WARS.jpg',
			'1977',
			$genres['AV-FN-AZ'],
			8.1
		),
	$Shrek = new Movie(
			'Shrek',
			'https://pad.mymovies.it/filmclub/2001/05/033/locandina.jpg',
			'2001',
			$genres['CM-AN'],
			6.9
		)
];
