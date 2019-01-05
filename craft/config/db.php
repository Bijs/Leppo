<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
	'*' => array(
		'tablePrefix' => 'craft',
		"initSQLs" => [
	        "SET SESSION sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';"
	    ]
	),

	/* LOCAL
	---------------------------------------------------------- */
    '.local' => array(
        'server'   => '45.32.236.97',
        'user'     => 'leppo',
        'password' => 'tbjUBSm5O0Cm2g7h',
        'database' => 'leppo',
    ),
     'local.leppo.nl' => array(
        'server'   => '45.32.236.97',
        'user'     => 'leppo',
        'password' => 'tbjUBSm5O0Cm2g7h',
        'database' => 'leppo',
    ),
);