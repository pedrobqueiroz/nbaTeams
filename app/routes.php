<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact/', 'Default#contact', 'default_contact'],
		['GET', '/conference/east/', 'Conference#east', 'conference_east'],
		['GET', '/conference/west/', 'Conference#west', 'conference_west'],
	);