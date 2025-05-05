<?php
	// require "matches/MatchService.php";
	// require "tournaments/TournamentService.php";

	// $tnmntServ = new TournamentService();
	// $matchServ = new MatchService();
	// echo gettype(array()).PHP_EOL;
	// echo gettype(FALSE).PHP_EOL;

	$date = '2022-12-02 15:12:45';
	$currentDate = strtotime($date);
	$futureDate = $currentDate+(60*5);
	$formatDate = date('Y-m-d H:i:s', $futureDate);
	$mysqlDate = date('Y-m-d H:i:s', strtotime($date));

	echo gettype($formatDate).PHP_EOL;
	echo $formatDate.PHP_EOL;
	echo password_hash('Heslo123', PASSWORD_DEFAULT);
?>
