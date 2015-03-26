<?php

	// these two constants are used to create root-relative web addresses
    // and absolute server paths throughout all the code

	define("BASE_URL", "/PHP/shirtShop/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/PHP/shirtShop/");

	define("DB_HOST", "localhost");
	define("DB_NAME", "shirtshop");
	define("DB_PORT", ""); // default 3306
	define("DB_USER", "root");
	define("DB_PASSWORD", "");