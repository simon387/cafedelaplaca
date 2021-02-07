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
	if ($key == "en") {
		return $lang;
	}
	//in-memory 2d-matrix with all translations, that's a small site(one page)
	$index = 1;
	if ($lang == "es") {
		$index = 2;
	}
	if ($lang == "ca") {
		$index = 3;
	}
	$matrix = array(//key, en, es, ca
		array("timetable", "Mon-Sun: 08:00 AM - 24:00 PM", "Lun-Dom: 08:00 AM - 24:00 PM", "Dil-Diu: 08:00 AM - 24:00 PM"),
		array("menu", "Menu", "Menú", "Menú"),
		array("specials", "Specials", "Especiales", "Especials"),
		array("events", "Events", "Eventos", "Esdeveniments"),
		array("gallery", "Gallery", "Galería", "Galeria"),
		array("chefs", "Staff", "Personal", "Personal"),
		array("contact", "Contact", "Contacto", "Contacte"),
		array("welcome_to", "Welcome to ", "Bienvenido a ", "Benvingut a "),
		array("subtitle", "Delivering great food for more than 18 years!", "¡Entregando buena comida por más de 18 años!", "Repartint menjar excel·lent durant més de 18 anys!"),
		array("our_menu", "Our Menu", "", ""),
	);
	for ($i = 0; $i < count($matrix); $i++) {
		if ($matrix[$i][0] == $key) {
			return $matrix[$i][$index];
		}
	}
}