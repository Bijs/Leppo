<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(
	'*' => array(
		'devMode' => false,
		'enableCsrfProtection' => true,
		'sendPoweredByHeader' => false,
		'userSessionDuration' => 'PT1H',
		'omitScriptNameInUrls' => true,
		'pageTrigger' => 'pagina/',
		'overridePhpSessionLocation' => true,
	),

	/* LOCAL
	---------------------------------------------------------- */
    '.local' => array(
        'devMode' => true,
        'siteUrl' => 'http://leppo.local/',
        'logDumpMethod' => 'print_r',
        'environmentVariables' => array(
            'basePath' => '/Applications/MAMP/htdocs/leppo/public_html/',
            'baseUrl'  => 'http://leppo.local/',
        )
    ),

    'leppo-jasper.local' => array(
        'devMode' => true,
        'siteUrl' => 'http://leppo-jasper.local/',
        'logDumpMethod' => 'print_r',
        'environmentVariables' => array(
            'basePath' => 'C:\Users\Jasper\Documents\GitHub\Leppo\public_html',
            'baseUrl'  => 'http://leppo-jasper.local/',
        )
    )
);