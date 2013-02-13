<?php

return array(

	'default' => 'sqlite',

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| In-memory database, fast and always clean.
	|
	*/

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => ':memory:',
			'prefix'   => '',
		),

	),

);