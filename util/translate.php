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
		array("our_menu", "Our Menu", "Nuestro menú", "El nostre menú"),
		array("about-p", "The Cafè de la Plaça is a cafeteria, bar and restaurant with a wide and varied menu that seeks to satisfy all palates.", "El Cafè de la Plaça es una cafetería, bar y restaurante con una carta amplia y variada que busca satisfacer todos los paladares.", "El Cafè de la Plaça és una cafeteria, bar i restaurant amb una carta àmplia i variada que busca satisfer tots els paladars."),
		array("about-li-1", " Plaça Francesc Macià i Llussà, 2, 08902 L'Hospitalet de Llobregat, Barcelona.", " Plaça Francesc Macià i Llussà, 2, 08902 L'Hospitalet de Llobregat, Barcelona.", " Plaça Francesc Macià i Llussà, 2, 08902 L'Hospitalet de Llobregat, Barcelona."),
		array("about-li-2", " Tel. 93 422 59 99", " Tel. 93 422 59 99", " Tel. 93 422 59 99"),
		array("about-li-3", " Open every day", " Abierto todos los días", " obert tots els dies"),
		array("", "", "", ""),
		array("", "", "", ""),
		array("", "", "", ""),
		array("", "", "", ""),
		array("", "", "", ""),
		array("", "", "", ""),
		array("", "", "", ""),
		array("", "", "", ""),
		array("", "", "", ""),
		array("", "", "", ""),
	);
	for ($i = 0; $i < count($matrix); $i++) {
		if ($matrix[$i][0] == $key) {
			return $matrix[$i][$index];
		}
	}
}