<?php
// main translation function
function tr($key)
{
	//getting query string for language detection
	$queryString = $_SERVER["QUERY_STRING"];
	$lang = str_replace("lang=", "", $queryString);
	if ($lang == '') {
		$lang = "en";
	}
	//in-memory 2d-matrix with all translations, that's a small site(one page)
	$index = 0;
	if ($lang == "es") {
		$index = 1;
	}
	if ($lang == "ca") {
		$index = 2;
	}
	$matrix = array(//en, es, ca
		array("Mon-Sun: 08:00 AM - 24:00 PM", "Lun-Dom: 08:00 AM - 24:00 PM", "Dil-Diu: 08:00 AM - 24:00 PM"),//0, timetable
	);
	//main switch
	switch ($key) {
		case "Cafè de la Plaça":
			echo $key;
			break;
		case "en":
			echo $lang;
			break;
		case "timetable":
			echo $matrix[0][$index];
			break;
		default:
			echo $key;
	}
}
