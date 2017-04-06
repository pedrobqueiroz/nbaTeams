<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact/', 'Default#contact', 'default_contact'],
		['GET', '/conference/east/', 'Conference#east', 'conference_east'],
		['GET', '/conference/west/', 'Conference#west', 'conference_west'],
		['GET', '/conference/division/[i:id]-[:divName]/', 'Division#division', 'division_division'],
		
		//This here can be done both as two separate ones or as one with GET|POST
		['GET', '/signin/', 'User#signin', 'user_signin'],
		['POST', '/signin/', 'User#signinPost', 'user_signinPost'],

		['GET|POST', '/signup/', 'User#signup', 'user_signup']
	);