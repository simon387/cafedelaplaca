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
		array("why-us-h2", "Why Us", "Porque Nosotros,", "Per què nosaltres"),
		array("why-us-p", "Why Choose Our Restaurant", "Por qué elegir nuestro restaurante", "Per què escollir el nostre restaurant"),
		array("why-us-h4-1", "Quality", "Calidad", "Qualitat"),
		array("why-us-p-1", "Our first goal is quality", "Nuestro primer objetivo es la calidad", "El nostre primer objectiu és la qualitat"),
		array("why-us-h4-2", "Courtesy", "Cortesía", "Cortesia"),
		array("why-us-p-2", "The efficiency of our services is very important to us,", "La eficiencia de nuestros servicios es muy importante para nosotros
", "L'eficiència dels nostres serveis és molt important per a nosaltres"),
		array("why-us-h4-3", "Rapidity", "Velocidad", "Velocitat"),
		array("why-us-p-3", "We are very quick to serve you, even at home", "Somos muy rápidos en atenderle, incluso en casa", "Ens servim molt ràpidament, fins i tot a casa"),
		array("menu-p", "Check Our Tasty Menu", "Lee nuestra sabroso menú", "Llegeix la nostra saborós menú"),
		array("contact-us", "Contact us", "Contáctenos", "Poseu-vos en contacte amb nosaltres"),
		array("useful-links", "Useful Links", "Enlaces útiles", "Links útils"),
		array("our-newsletter-h4", "Our Newsletter", "Nuestro Boletín", "El Nostre Butlletí"),
		array("our-newsletter-p", "Still not available", "Todavía no disponible", "Encara no està disponible"),
		array("our-services", "Our Services", "Nuestros servicios", "Els nostres serveis"),
		array("events-p", "Organize Your Events in our Restaurant", "Organice sus eventos en nuestro restaurante", "Organitzeu els vostres esdeveniments al nostre restaurant,"),
		array("events-h3-1", "Birthday Parties", "", ""),
		array("events-h3-2", "Private Parties", "", ""),
		array("events-h3-3", "Custom Parties", "", ""),
		array("events-p-1", "Per organizzare le tue cene ed eventi privati di ogni genere, Ca’Solare è il locale perfetto. La tua festa è un momento speciale: invita i tuoi amici da noi, e ci occuperemo di tutto!", "", ""),
		array("events-p-2", "Un compleanno rimane un evento speciale, anche in una vita frenetica come la nostra. Fatti tu il primo regalo, concedendoti una festa speciale in un ambiente elegante ed esclusivo!", "", ""),
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