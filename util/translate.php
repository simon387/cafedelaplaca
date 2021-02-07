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
		array("Menu", "Menú", "Menú"),//1, menu
		array("Specials", "Especiales", "Especials"),//2, specials
		array("Events", "Eventos", "Esdeveniments"),//3, events
		array("Gallery", "Galería", "Galeria"),//4, gallery
		array("Staff", "Personal", "Personal"),//5, chefs
		array("Contact", "Contacto", "Contacte"),//6, contact
		array("Welcome to ", "Bienvenido a ", "Benvingut a "),//7, welcome_to
		array("Delivering great food for more than 18 years!", "¡Entregando buena comida por más de 18 años!", "Repartint menjar excel·lent durant més de 18 anys!"),//8, subtitle
		array("Our Menu", "", ""),//9, our_menu
	);
	//main switch
	switch ($key) {
		case "en":
			return $lang;
		case "timetable":
			return $matrix[0][$index];
		case "menu":
			return $matrix[1][$index];
		case "specials":
			return $matrix[2][$index];
		case "events":
			return $matrix[3][$index];
		case "gallery":
			return $matrix[4][$index];
		case "chefs":
			return $matrix[5][$index];
		case "contact":
			return $matrix[6][$index];
		case "welcome_to":
			return $matrix[7][$index];
		case "subtitle":
			return $matrix[8][$index];
		case "our_menu":
			return $matrix[9][$index];
		default:
			return $key;
	}
}