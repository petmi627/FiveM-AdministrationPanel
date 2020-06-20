<?php
	#region Database Settings
	// DATABASE SETTINGS
	$GLOBALS['mysql_host'] = $_ENV["MYSQL_HOST"];				// MySQL Host
	$GLOBALS['mysql_user'] = $_ENV["MYSQL_USER"];				// MySQL User
	$GLOBALS['mysql_pass'] = $_ENV["MYSQL_PASSWORD"];			// MySQL Password
	$GLOBALS['mysql_db'] = $_ENV["MYSQL_DATABASE"];				// MySQL Database
	#endregion
	
	// SITE SETTINGS
	$GLOBALS['domainname'] = $_ENV["APP_URL"];					// URL (and folder if used) with protocol and trailing slash. Example: https://arthurmitchell.xyz/beta/
	$GLOBALS['subfolder'] = $_ENV["APP_SUBFOLDER"]; 			// If accessing via a sub folder type the sub folder name out like the following: /foldername Example: /staff otherwise leave blank
	$GLOBALS['apikey'] = $_ENV["APP_STEAM_API_KEY"];			// SteamCommunity API Key https://steamcommunity.com/dev/apikey
	date_default_timezone_set($_ENV["TZ"]);						// Timezone (http://php.net/manual/en/timezones.php)

?>
